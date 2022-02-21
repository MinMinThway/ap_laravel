<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about/{data}', function($data){
    
//     return view('about', ['data'=> $data]);
// });

// Route::view("/", "welcome",["name" => "Min Min Thway"]);
Route::get('/', [HomeController::class,"index"]);