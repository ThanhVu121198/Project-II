<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    use HasFactory;

    protected $table = 'payment_details';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function orders() {
        return $this->hasOne(Order::class, 'payment_details_id', 'id');
    }
}
