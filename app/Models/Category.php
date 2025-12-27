<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Menu;
use App\Models\Product;

class Category extends Model
{
    protected $fillable = [
        'cat_name',
        'cat_description',
        'menu_id',
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
