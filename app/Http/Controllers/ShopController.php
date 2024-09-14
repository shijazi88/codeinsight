<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopdetails()
    {
        return view('shop/shopdetails');
    }

    public function cart()
    {
        return view('shop/cart');
    }

    public function checkout()
    {
        return view('shop/checkout');
    }

    public function login()
    {
        return view('shop/login');
    }

    public function contact()
    {
        return view('shop/contact');
    }
    
}
