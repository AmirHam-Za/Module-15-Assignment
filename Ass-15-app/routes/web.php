<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){
    return view('pages.welcome');
});



Route::get('/signup',function(){
    return view('pages.signup');
});
Route::post('/register',[RegisterController::class,'ValidateAndRegister']);



//Task 2: Request Redirect
//Create a route /home that redirects to /dashboard using a 302 redirect.

//Answer - 2

Route::get('/dashboard', function () {
    return view('page.dashboard');
});

Route::get('/home', function () {
    return redirect('/dashboard', 302);
});



// Task 4: Route Middleware

// Create a route group for authenticated users only.
// This group should include routes for /profile and /settings.
// Apply a middleware called AuthMiddleware
// to the route group to ensure only authenticated users can access these routes

//Answer - 4

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        // Your profile logic here...
    });

    Route::get('/settings', function () {
        // Your settings logic here...
    });
});


Route::get('/contact',function(){
 return view('page.contact');
});


Route::post('/sendmail', ContactController::class);





Route::resource( "/products", ProductController ::class );




Route::resource( "/posts", PostController ::class );
