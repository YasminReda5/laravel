<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function home_action(){
return view('Home');
    }
    
    public function contant_action(){
return view('contant');
    }
      public function about_action(){
return view('about');
    }
   public function contact_us_action(){
return view('contact_us');
    }
     public function newaccount_action(){
return view('newaccount');
    }
         public function login_action(){
return view('login');
    }
  
               public function password_reset_action(){
return view('password_reset');
    }
    

}
