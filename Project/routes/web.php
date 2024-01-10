<?php

use App\Http\Controllers\photouploader;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroller;
use App\Http\Controllers\uniquecontroller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserloginController;
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
    return view('test');
});

// Route::get('post',function(){
//     return view("test1",[
//         "test"=> file_get_contents(__DIR__ . '/../resources/test/test1.html')
//     ]);
// });

// Route::get('test1/{get_data}' , function($data){
//     return $data;
// });

ROute::get('post/{data}', function ($data){
    $path = __DIR__ . "/../resources/test/{$data}.html";
    // ddd($path);
    
    if(!file_exists($path)){
        return redirect('/');
        // abort(404);
        // dd("Sorry, This file dosen't exist");
    }
    $post = file_get_contents($path);
    return view('test1',[
        'test'=> $post
    ]);
})->where('post','[A-z0-9]+');

// Route::get('/demo/{email}/{name?}', function ($name = null,$email = null){
//     $array = compact('name','email');
//     // print_r($array);
//     return view('demo')->with($array);
// });

// Route::any('demo1', function(){
//     echo "Testing";
// });

// Route::get('/test/{name?}', function ($name = null){
//     $data = compact('name');
//     return view('home')->with($data);
// });

// Route::get('/demo',[democontroller::class,'show']);
// Route::get('/demo', uniquecontroller::class);
Route::resource('/photo',PhotoController::class);
Route::get('/user_login', [UserloginController::class, 'index']);
Route::post('/login', [UserloginController::class, 'login']);