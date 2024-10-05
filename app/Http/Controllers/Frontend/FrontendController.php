<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;


class FrontendController extends Controller
{
    public function home(){
        return view('user.pages.home');
    }

    public function about(){
        return view('user.pages.about');
    }

    public function services(){
        return view('user.pages.services');
    }

    public function contactUs(){
        return view('user.pages.contact');
    }


    public function portfolio()
    {
        // Retrieve categories along with their associated works
        $categories = Category::with('works')->get();

        // return $categories;
    
        return view('user.pages.portfolio', compact('categories'));
    }
    
    




    public function caseStudy(){
        return view('user.pages.case_study');
    }

   
}
