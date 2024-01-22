<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templateController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    // public function about(){
    //     return view('frontend.about');
    // }
}
