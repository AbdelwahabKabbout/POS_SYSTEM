<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Branch;
use App\Models\Category;

class Menu extends Model
{
    protected $fillable = [
        'menu_name',
        'menu_description',
        'menu_logo',
        'branch_id',
    ];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
