<?php

namespace PhpSoft\Users\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function getTest($a = 1, $b =3) {
        return $a+$b;
    }
}
