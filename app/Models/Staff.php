<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Branch;

class Staff extends Model
{
    protected $fillable = [
        'staff_name',
        'staff_dob',
        'staff_position',
        'staff_monthly_paid',
        'branch_id',
    ];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }
}
