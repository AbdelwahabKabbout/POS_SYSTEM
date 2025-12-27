<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Branch;

class DineIn extends Model
{
    protected $fillable = [
        'table_number',
        'table_customer_number',
        'table_customer_feedback',
        'table_customer_status',
        'branch_id',
    ];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }
}
