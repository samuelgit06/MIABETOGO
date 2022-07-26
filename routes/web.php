<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('Authentification.login');
});
Route::get('/register',function (){
    return view('Authentification.register');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/ajout_etablissement', function () {
   return view('ajout_etablissement');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/index_voiture', function () {
    return view('index_voiture');
});
Route::get('/verifier', function () {
    return view('verifier');
});
Route::get('/pricing', function () {
    return view('locations_voiture.pricing');
});
Route::get('/tourisme', function () {
    return view('tourisme ');
});
Route::get('/verifier', function () {
    return view('verifier ');
});
Route::get('/user_page', function () {
    return view('page_modification_user ');
});
#Auth::routes();


#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
