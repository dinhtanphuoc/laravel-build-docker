<?php

namespace PhpSoft\Users\Controllers;

use Input;
use Auth;
use JWTAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;

class HandleApiUserController extends Controller
{
  // function postLogin(Request $request) {
  //   return dd($request->all());
  // }

  public function postLogin()
  {
      // grab credentials from the request
      $credentials = Input::only('email', 'password');
      try {
          // attempt to verify the credentials and create a token for the user
          if (! $token = JWTAuth::attempt($credentials)) {
            $data['status'] = '401';
            return redirect('/login')->session(['key' => 'value']);
          }
      } catch (JWTException $e) {
          // something went wrong whilst attempting to encode the token
          $data['status'] = '500';
          return redirect('/login')->with('status', $data);
      }

      // all good so return the token
      return response()->json([
          'status'  => 200,
          'message' => 'GET Ok',
      ], 200);
      // return response()->json('phpsoft.users::login/form', compact('token'));
  }

  function postRegister(Request $request) {
    return dd($request->all());
  }
}