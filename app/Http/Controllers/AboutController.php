<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        
        //echo __METHOD__;
        
        return view('about');
    }
}
