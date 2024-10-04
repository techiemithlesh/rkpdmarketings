<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        // Dynamic Categories with Works (Placeholder Dummy Data)
        $categories = [
            [
                'id' => 1,
                'name' => 'Performance Marketing',
                'works' => [
                    ['title' => 'Google Ads Campaign', 'description' => 'Managed Google Ads campaign to increase sales.', 'image' => 'dummy1.jpg'],
                    ['title' => 'Social Media Ads', 'description' => 'Instagram and Facebook ad campaigns for brand awareness.', 'image' => 'dummy2.jpg'],
                    ['title' => 'SEO Optimization', 'description' => 'Improved website traffic through SEO strategies.', 'image' => 'dummy3.jpg'],
                ],
            ],
            [
                'id' => 2,
                'name' => 'Web Development',
                'works' => [
                    ['title' => 'E-commerce Platform', 'description' => 'Custom-built e-commerce solution.', 'image' => 'dummy4.jpg'],
                    ['title' => 'Corporate Website', 'description' => 'Website for B2B service provider.', 'image' => 'dummy5.jpg'],
                ],
            ],
            [
                'id' => 3,
                'name' => 'App Development',
                'works' => [
                    ['title' => 'Mobile Banking App', 'description' => 'Cross-platform app for banking institution.', 'image' => 'dummy6.jpg'],
                    ['title' => 'Food Delivery App', 'description' => 'App for food ordering and delivery.', 'image' => 'dummy7.jpg'],
                ],
            ],
        ];
    
        return view('user.pages.portfolio', compact('categories'));
    }
    




    public function caseStudy(){
        return view('user.pages.case_study');
    }

   
}
