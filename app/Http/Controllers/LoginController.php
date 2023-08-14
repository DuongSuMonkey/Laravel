<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function checkAdmin(){

    }
    public function index(){
         return view('home');
    }
    public function adminhome(){
        return view('dashboard');
   }
}
