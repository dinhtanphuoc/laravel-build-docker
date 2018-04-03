<?php

namespace PhpSoft\Users\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function getViewRegister() {
        return view('phpsoft.users::register/form');
    }

    function getViewLogin() {
        return view('phpsoft.users::login/form');
    }
}
