<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class middlewarecontroller extends Controller
{
   public function __construct(){
   }
   public function show(){
     return view('Login');
   }
   public function login(Request $request)
{
    $this->validateLogin($request);

    if ($this->attemptLogin($request)) {
        return $this->sendLoginResponse($request);
    }

    return $this->sendFailedLoginResponse($request);
}
   public function check(Request $request)
   {
    $validator=$request->validate([
           'taikhoan' => 'bail|required|min:1|max:30',
           'Password' => 'bail|required|min:1',
       ]);
       $user = User::where('taikhoan', $request->taikhoan)
                  ->where('password', $request->Password)
                  ->first();
       if( $validator==true){
         if (!$user) {
             return response()->json(['message' => 'Người dùng không tồn tại'], 404);
         }else{
          if($user->Type=='admin')
         // return view('protected',compact('user'));
         return response()->json([
          'message' => " login by admin",
      ]);
        else{
         // return view('userInterface',compact('user'));
         return response()->json([
          'message' => " login by user",
      ]);
        }
         }
       }
    }
 }

