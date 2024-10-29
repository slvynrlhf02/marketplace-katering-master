<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MerchantProfile;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MerchantProfileRequest;

class MerchantProfileController extends Controller
{
    public function create()
    {
        return view('merchant.profile.create-profile');
    }

    public function store(MerchantProfileRequest $request)
    {

        $user = Auth::user();

        if ($user->merchantProfile) {
            return redirect()->route('merchant.profile')->with('warning', 'Profil sudah ada. Silakan edit profil Anda.');
        }

        MerchantProfile::create([
            'user_id' => $user->id,
            'company_name' => $request->company_name,
            'address' => $request->address,
            'contact' => $request->contact,
            'description' => $request->description,
        ]);

        return redirect()->route('merchant.profile')->with('success', 'Profil berhasil dibuat');
    }


    public function showProfile()
    {
        $profile = Auth::user()->merchantProfile;

        if (!$profile) {
            return redirect()->route('merchant.create-profile')->with('warning', 'Silakan lengkapi profil Anda terlebih dahulu.');
        }

        return view('merchant.profile.profile', compact('profile'));
    }

    public function editProfile()
    {
        $profile = Auth::user()->merchantProfile;

        if (!$profile) {
            return redirect()->route('merchant.create-profile')->with('warning', 'Silakan lengkapi profil Anda terlebih dahulu.');
        }

        return view('merchant.profile.edit-profile', compact('profile'));
    }


    public function updateProfile(MerchantProfileRequest $request)
    {

        $profile = Auth::user()->merchantProfile;
        $profile->update($request->validated());

        return redirect()->route('merchant.profile')->with('success', 'Profil diperbarui');
    }
}
