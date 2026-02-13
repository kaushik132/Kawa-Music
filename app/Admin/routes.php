<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('artists', ArtistController::class);
    $router->resource('video-details-inserts', VideoDetailsInsertController::class);
    $router->resource('instagrams', InstagramController::class);


    $router->resource('product-categories', ProductCategoryController::class);
    $router->resource('products', ProductController::class);
    $router->resource('product-filters', ProductFilterController::class);


    $router->resource('blog-categories', BlogCategoryController::class);
    $router->resource('blogs', BlogController::class);



// home page route
    $router->resource('home-page-instagrams', HomePageInstagramController::class);
    $router->resource('home-events', HomeEventController::class);
    $router->resource('home-videos', HomeVideoController::class);
    $router->resource('testimonials', TestimonialController::class);


    // info
    $router->resource('infos', InfoController::class);
    $router->resource('contacts', ContactController::class);
    $router->resource('inquiries', InquiryController::class);


    // seo
    $router->resource('seos', SeoController::class);





});
