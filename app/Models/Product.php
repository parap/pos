<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'item_name',
        'name',
        'description',
        'price',
        'vat_percent',
    ];

    public function orderLines(): HasMany
    {
        return $this->hasMany(OrderLine::class);
    }
}
