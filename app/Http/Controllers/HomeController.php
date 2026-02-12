<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Instagram;
use App\Models\VideoDetailsInsert;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductFilter;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\View;



class HomeController extends Controller
{
    public function __construct()
    {
        $artistlist = Artist::all();
        $pf =  ProductCategory::all();

        View::share('artistlist', $artistlist);
        View::share('pf', $pf);
    }

    public function index()
    {
        $as = Artist::latest()->get();

        return view('index', compact('as'));
    }


    public function artist($slug = null)
    {
        $artistdetails = Artist::where('slug', $slug)->first();
        $artsdetails = VideoDetailsInsert::orderBy('order_num', 'asc')->where('artist_id', $artistdetails->id)->get();
        $artinstadetails = Instagram::orderBy('order_num', 'asc')->where('artistname_id', $artistdetails->id)->get();



        return view('artist', compact('artistdetails', 'artsdetails', 'artinstadetails'));
    }
    public function blog($slug = null)
    {
// $homepage = Title::select('seo_title_blog','seo_des_blog','seo_key_blog','seo_image_blog')->first();

        if($slug!=null){
            $blogCategory = BlogCategory::where('slug',$slug)->first();
            $blogList = Blog::latest()->with('blogCategory')->where('category_id',$blogCategory->id)->paginate(4);
        //     $seo_data['seo_title'] =$blogCategory->seo_title;
        //     $seo_data['seo_description'] =$blogCategory->seo_description;
        //    $seo_data['keywords'] =$blogCategory->seo_keyword;
        //       $seo_data['seo_image'] = $blogCategory->image;
        //    $canocial ='https://www.tajindiatrails.com/blog/'.$slug;



        }else{
            $blogList = Blog::latest()->with('blogCategory')->paginate(4);
            // $seo_data['seo_title'] =$homepage->seo_title_blog;
            // $seo_data['seo_description'] =$homepage->seo_des_blog;
            // $seo_data['keywords'] =$homepage->seo_key_blog;
            //     $seo_data['seo_image'] = $homepage->seo_image_blog;
            // $canocial ='https://www.tajindiatrails.com/blogs';

         }
    return view('blog',compact('blogList'));
    }

    public function blogDetail($slug = null)
    {
       $allb = Blog::latest()->get();
        $blogdetails = Blog::with('blogCategory')->where('slug',$slug)->first();
    //     $seo_data['seo_title'] =$blogdetails->seo_title;
    //     $seo_data['seo_description'] =$blogdetails->seo_description;
    //    $seo_data['keywords'] =$blogdetails->seo_keyword;
    //       $seo_data['seo_image'] = $blogdetails->image;
    //    $canocial ='https://www.tajindiatrails.com/blog/'.$slug;
        return view('blog-detail',compact('blogdetails','allb'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }


    public function product($slug = null)
    {



      if($slug!=null){
              $productCategory = ProductCategory::where('slug', $slug)->firstOrFail();

        // Us category ke filters nikalo
        $productfilter = ProductFilter::where('category_id', $productCategory->id)->get();

        // Us category ke products nikalo
        $productList = Product::latest()
            ->with('category')
            ->where('product_cat_id', $productCategory->id)
            ->paginate(4);

        //     $seo_data['seo_title'] =$blogCategory->seo_title;
        //     $seo_data['seo_description'] =$blogCategory->seo_description;
        //    $seo_data['keywords'] =$blogCategory->seo_keyword;
        //       $seo_data['seo_image'] = $blogCategory->image;
        //    $canocial ='https://www.tajindiatrails.com/blog/'.$slug;



        }else{
            $productfilter = collect(); // empty collection
        $productList = Product::latest()
            ->with('category')
            ->paginate(4);
            // $seo_data['seo_title'] =$homepage->seo_title_blog;
            // $seo_data['seo_description'] =$homepage->seo_des_blog;
            // $seo_data['keywords'] =$homepage->seo_key_blog;
            //     $seo_data['seo_image'] = $homepage->seo_image_blog;
            // $canocial ='https://www.tajindiatrails.com/blogs';

         }

         $allfilter = ProductFilter::latest()->get();

        return view('product', compact('productList', 'productfilter','allfilter'));
    }


    public function productDetail($slug = null)
    {
         $allproduct =  Product::with('category')->get();
         $productData = Product::with('category')->where('slug',$slug)->first();
    //     $seo_data['seo_title'] =$productData->seo_title;
    //     $seo_data['seo_description'] =$productData->seo_des;
    //    $seo_data['keywords'] =$productData->seo_key;
    //       $seo_data['seo_image'] = $productData->image;
    //    $canocial ='https://www.tajindiatrails.com/product-detail/'.$slug;
        return view('product-detail',compact('productData','allproduct'));
    }
}
