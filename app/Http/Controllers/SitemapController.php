<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DestinationCategory;
use App\Models\Destination;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Artist;
use App\Models\Product;
use App\Models\ProductCategory;


class SitemapController extends Controller
{
       public function index(){

       $product = Product::all();
       $productCategory = ProductCategory::all();
           $artist = Artist::all();
           $blog = Blog::all();

           $blogCategory = BlogCategory::all();

        return response()->view('sitemap',[
            'product'=> $product,
        'productCategory'=> $productCategory,
        'artist'=> $artist,
        'blog'=> $blog,
        'blogCategory'=> $blogCategory
        ])->header('Content-Type','text/xml');
    }
}
