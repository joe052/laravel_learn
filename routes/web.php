<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('welcome');
});

Route::get('/pizzas', function () {
    //get data from db   
    $pizzas = [
        ["type" => "hawaiian", "base" => "cheesy crust", "price" => "200"],
        ["type" => "volcano", "base" => "garlic crust", "price" => "150"],
        ["type" => "veg supreme", "base" => "thin & crispy", "price" => "25"]
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
    // return ["name"=>"pizzas", "store"=>"KFC"];
});

Route::get('home', [PageController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');