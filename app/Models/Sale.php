<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'sale_date',
        'total_amount',
        'paid_amount',
        'due_amount'
    ];

    public function items()
    {
        return $this->hasMany(SaleItem::class);
    }
}
