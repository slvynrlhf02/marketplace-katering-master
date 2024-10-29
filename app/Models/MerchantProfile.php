<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MerchantProfile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'company_name', 'address', 'contact', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'merchant_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
