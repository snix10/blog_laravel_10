<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\siginController;
use App\Http\Controllers\BlogTableController;
use Illuminate\Support\Facades\Route;
use App\Models\blog;
use App\Models\category;
use App\Models\user;

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



Route::get('/blogs',[blogController::class,'index']);

Route::get('/baca/{blog:id}', [blogController::class,'show']);




Route::get('/kategoris', function() {
    return view('kategoris', [
        "title"  => 'BLOG CATEGORIES',
        "kategoris"  => category::all(),
        
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title"  => "about",
    ]);
    
});



Route::get('/home', function () {
    return view('home',[
        "title"  => "Home",
    ]);
    
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main', [
       
    ]);
});

Route::get('/login',[loginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class,'login']);
Route::post('/logout',[loginController::class,'logout']);

Route::get('/sigin',[siginController::class,'index'])->middleware('guest');
Route::post('/sigin',[siginController::class,'store']);

Route::get('/profile', function() {
    return view('dashboard.profile',[
        'laman'  => "PROFILE"
    ]);
})->middleware('auth');

Route::resource('/dashboard',BlogTableController::class)->middleware('auth');
