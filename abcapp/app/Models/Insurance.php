<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'insurance';
    protected $dates = ['created_at', 'updated_at'];
}
