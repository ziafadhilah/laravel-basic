<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MenuController;

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
//     $name = 'Halucoft';
//     return view('index',['name' => $name]);
// });

// Route::get('/about', function () {
//     $name = 'Halucoft';
//     return view('about',['name' => $name]);
// });

// Route::get('/menu', function () {
//     $name = 'Halucoft';
//     return view('menu-halucoft/index',['name' => $name]);
// });

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/menu', [MenuController::class,'index']);
Route::get('/menu/{id}', [MenuController::class,'show']);