<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetails extends Model
{
    use SoftDeletes;
    
    protected $table = 'user_details';

    public $timestamps = false;

}