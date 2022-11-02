<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controller\HeloController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//fungsi FUNCTION
// Route::get('ben', function(){
//     return ["aben" => "Wani ngeyel"];
// });

// Route: :get('halocontroller', [HeloController::clas, 'index']);
// Route: :post('halocontroller', [HeloController::clas, 'index']);
// Route: :delete('halocontroller', [HeloController::clas, 'index']);
// Route: :put('halocontroller', [HeloController::clas, 'index']);

Route::resource('halocontroller', HaloController::class);
Route::resource('siswa', SiswaController::class);

//Route::get('/books', [BookController::class, 'index']);
//Route::get('/books/{id}', [BookController::class, 'show']);
//Route::post('/books', [BookController::class, 'store']);
//Route::put('/books/{id}', [BookController::class, 'update']);
//Route::delete('/books/{id}', [BookController::class, 'destroy']);

Route::resource('books', BookController::class)->except(
    ['create','edit']
);