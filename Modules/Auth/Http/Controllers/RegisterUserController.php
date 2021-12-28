<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Modules\Auth\DTO\CreateRegisterUserDTO;
use Modules\Auth\Http\Requests\CreateRegisterUserRequest;
use Modules\Auth\Models\User;

class RegisterUserController extends Controller
{
    // Register user
    public function __invoke(CreateRegisterUserRequest $request)
    {
       $user = User::create((array) new CreateRegisterUserDTO(...$request->validated()));

       event(new Registered($user));

       Auth::login($user);

       return response()->noContent();
    }
}
