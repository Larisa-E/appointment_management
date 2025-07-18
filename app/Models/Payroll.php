<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payroll extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'year',
        'month',
        'net_salary',
    ];

    //define relationships
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
