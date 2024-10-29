<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MerchantProfile;

class CustomerCMSContoller extends Controller
{
    public function index()
    {
        $merchants = MerchantProfile::with('menus')->get();

        return view('customer_cms.index', compact('merchants'));
    }
}
