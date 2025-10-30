<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use SoftDeletes;
    protected $fillable = ['purchase_date', 'total_amount'];

    public function items()
    {
        return $this->hasMany(PurchaseItem::class);
    }
}
