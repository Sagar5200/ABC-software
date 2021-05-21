<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'term_condition';
    protected $dates = ['created_at', 'updated_at'];
}
