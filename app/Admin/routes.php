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


});
