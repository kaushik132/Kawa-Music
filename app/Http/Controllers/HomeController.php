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
use App\Models\HomeEvent;
use App\Models\HomePageInstagram;
use App\Models\Testimonials;
use App\Models\HomeVideo;
use App\Models\Info;
use App\Models\Contact;
use App\Models\Inquiry;
use App\Models\Seo;

use Illuminate\Support\Facades\View;



class HomeController extends Controller
{
    public function __construct()
    {
        $artistlist = Artist::all();
        $pf =  ProductCategory::all();
        $info = Info::first();
        View::share('info', $info);

        View::share('artistlist', $artistlist);
        View::share('pf', $pf);
    }

    public function index()
    {

    $homepage = Seo::latest()->first();

        $seo_data['seo_title'] = $homepage->seo_title_home;
        $seo_data['seo_description'] = $homepage->seo_des_home;
        $seo_data['keywords'] = $homepage->seo_key_home;
        $seo_data['seo_image'] = 'images/logo.png';
         $canocial = 'http://127.0.0.1:8000';
        $event = HomeEvent::latest()->get();
        $video = HomeVideo::latest()->get();
        $testi = Testimonials::latest()->get();
        $insta = HomePageInstagram::latest()->get();

        $as = Artist::latest()->get();
        $pfs =  Product::with('category')->where('product_cat_id', 1)->get();
        $pffs =  Product::with('category')->where('product_cat_id', 2)->get();



        return view('index', compact('event','as','pfs','pffs','video','testi','insta','seo_data','canocial'));
    }


    public function artist($slug = null)
    {
        $artistdetails = Artist::where('slug', $slug)->first();
        $artsdetails = VideoDetailsInsert::orderBy('order_num', 'asc')->where('artist_id', $artistdetails->id)->get();
        $artinstadetails = Instagram::orderBy('order_num', 'asc')->where('artistname_id', $artistdetails->id)->get();
             $seo_data['seo_title'] =$artistdetails->seo_title;
             $seo_data['seo_description'] =$artistdetails->seo_des;
             $seo_data['keywords'] =$artistdetails->seo_key;
             $seo_data['seo_image'] = $artistdetails->image;
             $canocial ='https://www.tajindiatrails.com/artist/'.$slug;


        return view('artist', compact('artistdetails', 'artsdetails', 'artinstadetails', 'seo_data', 'canocial'));
    }



    public function blog($slug = null)
    {
$homepage = Seo::select('seo_title_blog','seo_des_blog','seo_key_blog')->first();

        if($slug!=null){
            $blogCategory = BlogCategory::where('slug',$slug)->first();
            $blogList = Blog::latest()->with('blogCategory')->where('category_id',$blogCategory->id)->paginate(4);
            $seo_data['seo_title'] =$blogCategory->seo_title;
            $seo_data['seo_description'] =$blogCategory->seo_description;
           $seo_data['keywords'] =$blogCategory->seo_keyword;
              $seo_data['seo_image'] = $blogCategory->image;
           $canocial ='https://www.tajindiatrails.com/blog/'.$slug;



        }else{
            $blogList = Blog::latest()->with('blogCategory')->paginate(4);
            $seo_data['seo_title'] =$homepage->seo_title_blog;
            $seo_data['seo_description'] =$homepage->seo_des_blog;
            $seo_data['keywords'] =$homepage->seo_key_blog;
                $seo_data['seo_image'] = 'images/logo.png';
            $canocial ='https://www.tajindiatrails.com/blogs';

         }
    return view('blog',compact('blogList','seo_data','canocial'));
    }

    public function blogDetail($slug = null)
    {
       $allb = Blog::latest()->get();
        $blogdetails = Blog::with('blogCategory')->where('slug',$slug)->first();
        $seo_data['seo_title'] =$blogdetails->seo_title;
        $seo_data['seo_description'] =$blogdetails->seo_des;
       $seo_data['keywords'] =$blogdetails->seo_key;
          $seo_data['seo_image'] = $blogdetails->image;
       $canocial ='https://www.tajindiatrails.com/blog/'.$slug;
        return view('blog-detail',compact('blogdetails','allb','seo_data','canocial'));
    }

    public function contact()
    {
         $homepage = Seo::latest()->first();

        $seo_data['seo_title'] = $homepage->seo_title_contact;
        $seo_data['seo_description'] = $homepage->seo_des_contact;
        $seo_data['keywords'] = $homepage->seo_key_contact;
        $seo_data['seo_image'] = 'images/logo.png';
         $canocial = 'http://127.0.0.1:8000/contact';
        return view('contact',compact('seo_data','canocial'));
    }

    public function privacyPolicy()
    {
           $homepage = Seo::latest()->first();

        $seo_data['seo_title'] = $homepage->seo_title_privacy;
        $seo_data['seo_description'] = $homepage->seo_des_privacy;
        $seo_data['keywords'] = $homepage->seo_key_privacy;
        $seo_data['seo_image'] = 'images/logo.png';
         $canocial = 'http://127.0.0.1:8000/privacy-policy';
        return view('privacy-policy',compact('seo_data','canocial'));
    }


    public function product($slug = null)
    {


$homepage = Seo::latest()->first();

      if($slug!=null){
              $productCategory = ProductCategory::where('slug', $slug)->firstOrFail();

        // Us category ke filters nikalo
        $productfilter = ProductFilter::where('category_id', $productCategory->id)->get();

        // Us category ke products nikalo
        $productList = Product::latest()
            ->with('category')
            ->where('product_cat_id', $productCategory->id)
            ->paginate(4);

            $seo_data['seo_title'] =$productCategory->seo_title;
            $seo_data['seo_description'] =$productCategory->seo_des;
           $seo_data['keywords'] =$productCategory->seo_key;
              $seo_data['seo_image'] = $productCategory->image;
           $canocial ='https://www.tajindiatrails.com/product/'.$slug;



        }else{
            $productfilter = collect(); // empty collection
        $productList = Product::latest()
            ->with('category')
            ->paginate(4);
            $seo_data['seo_title'] =$homepage->seo_title_product;
            $seo_data['seo_description'] =$homepage->seo_des_product;
            $seo_data['keywords'] =$homepage->seo_key_product;
                $seo_data['seo_image'] = 'images/logo.png';
            $canocial ='https://www.tajindiatrails.com/product';

         }

         $allfilter = ProductFilter::latest()->get();

        return view('product', compact('productList', 'productfilter','allfilter','seo_data','canocial'));
    }


    public function productDetail($slug = null)
    {
         $allproduct =  Product::with('category')->get();
         $productData = Product::with('category')->where('slug',$slug)->first();
        $seo_data['seo_title'] =$productData->seo_title;
        $seo_data['seo_description'] =$productData->seo_des;
       $seo_data['keywords'] =$productData->seo_key;
          $seo_data['seo_image'] = $productData->image;
       $canocial ='https://www.tajindiatrails.com/product-detail/'.$slug;
        return view('product-detail',compact('productData','allproduct','seo_data','canocial'));
    }






    // post Section



      public function store(Request $request)
    {


    $request->validate([
        'first_name' => 'required|string|max:50',
        'last_name'  => 'required|string|max:50',
        'email'      => 'required|email',
        'country_code' => 'required',
        'phone'      => 'required|digits_between:8,15',
        'subject'    => 'required',
        'message'    => 'required|min:10',
    ]);

    Contact::create([
        'first_name'   => $request->first_name,
        'last_name'    => $request->last_name,
        'email'        => $request->email,
        'country_code' => $request->country_code,
        'phone'        => $request->phone,
        'subject'      => $request->subject,
        'message'      => $request->message,
    ]);



        return back()->with('success', 'Message sent successfully!');
    }


    public function productstore(Request $request)
    {
        $request->validate([
            'product_id'    => 'required',
            'product_title' => 'required',
            'name'          => 'required|string|max:100',
            'email'         => 'required|email',
            'phone'         => 'required|digits_between:8,15',
            'address'       => 'required|min:10',
        ]);

        Inquiry::create($request->all());

        return back()->with('success', 'Inquiry sent successfully!');
    }

}
