<?php

namespace App\Http\Controllers\Frontend\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Repositories\Frontend\Auth\UserRepository;
use App\Http\Requests\Frontend\User\RegisterRequest;
use App\Http\Requests\Frontend\User\LoginRequest;


class AuthController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;
    /**
     * AuthController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function register(RegisterRequest $request)
    {
        $user = $this->userRepository->create($request->only('first_name', 'last_name', 'email', 'password'));
        if( $user ) {
            $status = 200;
            $accessToken = $user->createToken('authToken')->accessToken;
            session()->put('access_token' , $accessToken);
        }
        return response([ 'user' => $user, 'access_token' => $accessToken]);
    }

    public function login(LoginRequest $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        session()->put('access_token' , $accessToken);
        return response(['user' => auth()->user(), 'access_token' => $accessToken]);

    }
}