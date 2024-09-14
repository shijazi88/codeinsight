<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages/about');
    }

    public function pricing()
    {
        return view('pages/pricing');
    }

    public function login()
    {
        return view('pages/login');
    }

    public function blog()
    {
        return view('pages/blog');
    }
    
    public function casedetails()
    {
        return view('pages/casedetails');
    }

    public function pricingtwo()
    {
        return view('pages/pricingtwo');
    }

    public function registration()
    {
        return view('pages/registration');
    }

    public function blogdetails()
    {
        return view('pages/blogdetails');
    }

    public function usecase2()
    {
        return view('pages/usecase2');
    }

    public function pricingthree()
    {
        return view('pages/pricingthree');
    }

    public function reset()
    {
        return view('pages/reset');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function casedetails2()
    {
        return view('pages/casedetails2');
    }

    public function faq()
    {
        return view('pages/faq');
    }

    public function notfound()
    {
        return view('pages/notfound');
    }

    public function feature()
    {
        return view('pages/feature');
    }

}
