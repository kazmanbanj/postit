<?php

// App::bind('App\Billing\Stripe', function () {
//     return new \App\Billing\Stripe(config('services.stripe.secret'));
// });

// $stripe = resolve('App\Billing\Stripe');

// dd($stripe);

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store')->middleware('auth');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});