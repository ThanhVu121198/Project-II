<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function orderDetails() {
        return $this->(OrderDetail::class, 'order_id', 'id');
    }

    public function paymentDetails() {
        return $this->hasOne(PaymentDetails::class, 'order_id', 'id');
    }
}
