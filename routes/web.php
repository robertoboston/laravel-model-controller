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
    return view('home');
})->name('homepage');

Route::get('/comics',function(){
    $fumetti = config('db');
   
    return view('comics',compact('fumetti'));

})->name('fumetti');

Route::get('/comics/{id}',function($id){
    $fumetti = config('db');
    $single = '';
    foreach($fumetti as $key => $item){
        if($key == $id){
            $single = $item;
        }
    };

    return view('detail_comics',compact('single'));

})->name('detail_comics');
