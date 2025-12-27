<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Staff;
use App\Models\DineIn;

class Branch extends Model
{
    protected $fillable = [
        'branch_name',
        'branch_location',
        'branch_phone_number',
        'restaurant_id',
    ];

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function staff(): HasMany
    {
        return $this->hasMany(Staff::class);
    }

    public function dineIns(): HasMany
    {
        return $this->hasMany(DineIn::class);
    }
}
