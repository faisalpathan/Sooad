<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{   



    public function __construct()
   {
     $this->middleware('auth', ['except' => ['home','formIndus', 'createAccount','aboutUs','contactUs','form','dashboard','formAdmin']]);
   }
    public function dashboard()
    {
        return view('backend.dashboard');
    }
    public function formAdmin()
    {
        return view('backend.formAdmin');
    }

    public function home()
    {
    	return view('home');
    }


   public function admin()
    {
        return view('adminpage');
    }

     public function signin()
    {
    	return view('signin');
    }
     public function createAccount()
    {
    	return view('createAccount');
    }
    public function form()
    {
    	return view('form');
    }
    public function formIndus()
    {
        return view('formIndus');
    }
    public function aboutUs()
    {
    	return view('aboutUs');
    }
    public function contactUs()
    {
    	return view('contactUs');
    }
    
    // public function aadharform()
    // {
    //     return view('aadharform');
    // }
}
