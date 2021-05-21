<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MVTinfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mvt_details';
    protected $dates = ['created_at', 'updated_at'];

}