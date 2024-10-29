<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function create(Menu $menu)
    {
        return view('customer_cms.order.create-order', compact('menu'));
    }

    public function store(OrderRequest $request, Menu $menu)
    {
        $invoiceNumber = 'INV' . date('Y')  . str_pad(Order::count() + 1, 4, '0', STR_PAD_LEFT);

        Order::create([
            'user_id' => Auth::id(),
            'menu_id' => $menu->id,
            'quantity' => $request->quantity,
            'delivery_date' => $request->delivery_date,
            'total_price' => $menu->price * $request->quantity,
            'invoice_number' => $invoiceNumber,
        ]);

        return redirect()->route('customer.orders')->with('success', 'Pesanan berhasil dibuat.');
    }

    public function index()
    {
        $orders = Auth::user()->order;

        return view('customer_cms.order.index', compact('orders'));
    }


    public function merchantOrders()
    {
        $merchantProfile = Auth::user()->merchantProfile;

        if (!$merchantProfile) {
            $orders = collect();
        } else {
            $menus = $merchantProfile->menus()->with('order')->get();

            $orders = $menus->flatMap(function ($menu) {
                return $menu->order;
            });
        }

        return view('merchant.order.index', compact('orders'));
    }

    public function generateInvoicePDF(Order $order)
    {
        // if (Auth::id() !== $order->user_id) {
        //     abort(403, 'Unauthorized access.');
        // }

        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $dompdf = new Dompdf($options);

        $html = view('merchant.order.invoice_pdf', compact('order'))->render();

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        return $dompdf->stream('Invoice-' . $order->invoice_number . '.pdf', [
            'Attachment' => false,
        ]);
    }
}
