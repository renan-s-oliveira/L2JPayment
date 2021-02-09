<?php

namespace L2JPayment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonateStatus extends Model
{
    use HasFactory;

    protected $connection = 'game_server';
    
    public $table = 'donate_status';

}
