<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomepageController extends Controller {
    public function goToHomePage(){
        return view('home');
    }
    public function goToIndexPage(){
        return view('index');
    }
    public function goToAboutUsPage(){
        return view('aboutUs');
    }
    public function goToRegisterPage(){
        return view('register');
    }
   
    


}