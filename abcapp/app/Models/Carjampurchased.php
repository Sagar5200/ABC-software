<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carjampurchased extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'carjam_purchased';
    protected $dates = ['created_at', 'updated_at'];
}