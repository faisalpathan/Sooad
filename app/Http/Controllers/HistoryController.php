<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Aadhar;

use Illuminate\Support\Facades\Input;

class HistoryController extends Controller
{
    public function __construct()
   {
     $this->middleware('auth',['except' => ['getLogout']]);
   }
   public function index()
   {
   		$display=Aadhar::all();
   		return view("history",compact("display"));
   }
}
