<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'user_id',
        'name',
        'email',
        'position',
    ];
// Define relationships
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function schedule(): BelongsTo {
        return $this->belongsTo(Schedule::class); 
    }

    public function leaves(): HasMany {
        return $this->hasMany(Leave::class);
    }


}
