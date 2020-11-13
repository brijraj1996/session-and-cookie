<?php
namespace App\Http\Controllers;
use App\Http\Middleware\Auth;
use Illuminate\Http\Response;
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

Route::get('/setSession', function () {

    session(['Seon Connery' => "Connery debuted with Dr. no in 1962"]);
    session(['Roger Moore' => "Moore debuted a decade later with Live and Let Die"]);
    session(['Bond' => "James Bond"]);
    
    // return view('welcome');
});

Route::get('/getSession', [LoginController::class, 'bond']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/store', [LoginController::class, 'store']);

Route::post('/home', function(){
    return view('welcome');
});

Route::get('/cookie', function() {
    $response = new Response('Hello World');
    
    $response->withCookie('color', 'blue');

    return $response;
});
