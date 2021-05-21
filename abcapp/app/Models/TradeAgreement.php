<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeAgreement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trade_agreement';
    protected $dates = ['created_at', 'updated_at'];
}