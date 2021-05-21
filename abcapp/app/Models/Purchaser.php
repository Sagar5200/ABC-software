<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchaser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'purchaser_detail';
    protected $dates = ['created_at', 'updated_at'];
}