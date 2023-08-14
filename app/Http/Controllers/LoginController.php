<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\isAdmin;
class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function checkAdmin(){

    }
    public function index(){
        $user=Auth()->user()->usertype;
        if($user=='user'){
         return view('home');
        }else{
            return view('dashboard');
        }
    }
    public function admin(){

            return view('dashboard');
    }
 
}
