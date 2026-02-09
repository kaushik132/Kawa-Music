<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function artist()
    {
        return view('artist');
    }
    public function blog()
    {
        return view('blog');
    }

    public function blogDetail()
    {
        return view('blog-detail');
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }


    public function product()
    {
        return view('product');
    }


    public function productDetail()
    {
        return view('product-detail');
    }
}
