<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\isAdmin;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class LoginController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function index(Request $request){
        $user=Auth()->user()->usertype;
        
        if($user=='user'){
        $item=new Activity();
        $item->log_name='login';
        $item->description='user';
        $item->save();
            return  view('home');
        }else{
        $item=new Activity();
        $item->log_name='login';
        $item->description='admin';
        $item->save();
            return view('dashboard');
        }
        
    }
    public function admin(){

            return view('dashboard');
    }
 
}
