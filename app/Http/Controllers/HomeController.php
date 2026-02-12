<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Instagram;
use App\Models\VideoDetailsInsert;
use Illuminate\Support\Facades\View;



class HomeController extends Controller
{
    public function __construct()
    {
        $artistlist = Artist::all();
        View::share('artistlist', $artistlist);
    }

    public function index()
    {
        return view('index');
    }


    public function artist($slug = null)
    {
        $artistdetails = Artist::where('slug', $slug)->first();
        $artsdetails = VideoDetailsInsert::orderBy('order_num', 'asc')->where('artist_id', $artistdetails->id)->get();
        $artinstadetails = Instagram::orderBy('order_num', 'asc')->where('artistname_id', $artistdetails->id)->get();



        return view('artist', compact('artistdetails', 'artsdetails', 'artinstadetails'));
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
