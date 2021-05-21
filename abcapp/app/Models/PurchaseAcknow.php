<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseAcknow extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'purchaser_aknow_certifies';
    protected $dates = ['created_at', 'updated_at'];
}
