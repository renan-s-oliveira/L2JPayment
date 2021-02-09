<?php

namespace L2JPayment\Models;

use L2JPayment\Models\DonateStatus;
use L2JPayment\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    protected $connection = 'game_server';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'orders';

    protected $primaryKey = 'id';

    protected $fillable = [
        'transaction',
        'char_id',
        'method_payment',
        'payment_status',
        'donate_status'
    ];
    
    /**
     * paymentMethod
     *
     * @return 
     */
    public function paymentMethod()
    {
        return $this->hasOne(PaymentMethod::class, 'payment_method');
    }

    public function donateStatus()
    {
        return $this->hasOne(DonateStatus::class);
    }


}