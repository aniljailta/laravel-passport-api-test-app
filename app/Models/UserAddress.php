<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAddress extends Model
{
    use SoftDeletes;
    
    protected $table = 'user_address';

    public $timestamps = false;

    // public function users()
    // {
    //     return $this->belongsToMany('App\Models\User', 'user_use_promo_code', 'promo_code_id', 'user_id' )->withPivot([ 'no_of_use', 'is_valid' ]);
    // }

}