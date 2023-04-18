<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menus\BurgerController;
use App\Http\Controllers\Menus\SideController;
use App\Http\Controllers\Menus\MeatController;
use App\Http\Controllers\Menus\SaladController;
use App\Http\Controllers\Menus\AllergenController;
use App\Http\Controllers\Menus\DessertController;
use App\Http\Controllers\Menus\DrinkController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([], function () {
    Route::get('/burgers',[BurgerController::class,'index'])->name('burgers');
    Route::get('/sides',[SideController::class,'index'])->name('sides');
    Route::get('/meats',[MeatController::class,'index'])->name('meats');
    Route::get('/salads',[SaladController::class,'index'])->name('salads');
    Route::get('/allergen',[AllergenController::class,'index'])->name('allergen');
    Route::get('/desserts',[DessertController::class,'index'])->name('desserts');
    Route::get('/drinks',[DrinkController::class,'index'])->name('drinks');
});
Route::group([],function(){
    Route::get('/avlegal',function(){return view('legal.avlegal');})->name('avlegal');
    Route::get('/polprivacy',function(){return view('legal.polprivacidad');})->name('privacy');
});
