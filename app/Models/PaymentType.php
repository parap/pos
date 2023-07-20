<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentType extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'payment_types';
    protected $fillable = [
        'payment_class',
        'active',
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
