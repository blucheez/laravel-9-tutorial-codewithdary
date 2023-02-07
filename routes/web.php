<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

//GET
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/{id}', [PostsController::class, 'show']);

//POST
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog/', [PostsController::class, 'store']);

//PUT OR PATCH
Route::get('/blog/edit/{id}', [PostsController::class, 'edit']);
Route::patch('/blog/{id}', [PostsController::class, 'update']);

//DELETE
Route::delete('/blog/{id}', [PostsController::class, 'destroy']);

//Route::resource('blog', PostsController::class);

//Route for invoke method
Route::get('/', HomeController::class);

//Route::view('/blog', 'blog.index', ['name' => 'code with dary']);


