<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('user.pages.home');
    }

    public function about(){
        return view('user.pages.about');
    }

    public function contact(){
        return view('user.pages.contact');
    }
}
