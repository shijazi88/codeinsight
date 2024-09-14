<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function index1()
    {
        return view('index1');
    }

    public function index2()
    {
        return view('index2');
    }

    public function index3()
    {
        return view('index3');
    }

    public function index4()
    {
        return view('index4');
    }

    public function index5()
    {
        return view('index5');
    }

    public function index6()
    {
        return view('index6');
    }

    public function index7()
    {
        return view('index7');
    }

    public function usecase()
    {
        return view('pages/usecase');
    }

}
