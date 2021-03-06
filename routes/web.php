<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;

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
//     return view('auth.login');
// });




// dashboard--
Route::get('/dashboard', function () {

        $data=Post::where('user_id','=', Auth::id())->get();

        return view('dashboard',compact('data'));
    
        })->middleware(['auth'])->name('dashboard'); require __DIR__.'/auth.php';

// Route::get('/login', [AuthorController::class, 'loginpage'])->name('login');
Route::get('/', [Controller::class, 'home']);

// Post
Route::post('/posted', [PostController::class,'add_post'])->name('addpost');
// landingpage
Route::get('/landing', [Controller::class,'landingpage'])->name('landingpage');

// logged-in-user-home
Route::post('/home', [PostController::class,"add_post2"])->name('addpost2')->middleware('auth');