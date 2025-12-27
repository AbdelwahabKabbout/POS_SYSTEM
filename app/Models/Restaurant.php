<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Branch;

class Restaurant extends Model
{
    protected $fillable = [
        'rest_name',
        'rest_description',
        'rest_logo',
        'user_id',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function branches(): HasMany
    {
        return $this->hasMany(Branch::class);
    }
}
