<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\User;

/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id)
    {   
        $user =  User::where('id', $id)->with(['details','address'])->first();
        return view('frontend.user.account')->with(['user'=> $user]);
    }
}
