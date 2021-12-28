<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    // Register user
    public function __invoke(Request $request)
    {
        return $request;
    }
}
