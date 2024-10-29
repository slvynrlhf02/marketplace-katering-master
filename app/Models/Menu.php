<?php

namespace App\Models;

use App\Models\Order;
use App\Models\MerchantProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['merchant_id', 'name', 'description', 'image', 'price', 'kategori'];

    public function merchantProfile()
    {
        return $this->belongsTo(MerchantProfile::class, 'merchant_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
