<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ZReport extends Model
{
    use HasFactory;
    protected $table = 'z_reports';
    protected $fillable = [
        'start_datetime',
        'end_datetime',
    ];
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
