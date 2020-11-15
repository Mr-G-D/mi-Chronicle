<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\postsController;


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
    return view('chronicle');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('posts.view');
})->name('home');

// Route::post('contact_show', [
//     'uses' => [postsController::class,'store']
//   ]);

// Route::get('contact_create', [
//     'uses' => [postsController::class,'create']
//   ]);

//Route::resource('/home',postsController::class);

Route::get('/home',[postsController::class,'index']);
Route::post('/home',[postsController::class,'store']);
Route::get('/home/create',[postsController::class,'create']);

Route::get('/home/{id}',[postsController::class,'show']);

Route::put('/home/{id}',[postsController::class,'update']);
Route::get('/home/{id}/edit',[postsController::class,'edit']);


?>
