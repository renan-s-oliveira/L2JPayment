<?php

namespace L2JPayment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    protected $fillable = [];

}