<?php

use App\Models\Category;
use App\Models\Player;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/categories', function () {
    return view('categories', [ 'categories'=> Category::all() ]);
})->middleware(['auth'])->name('categories');

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [ 'category'=> $category ]);
})->middleware(['auth'])->name('category');

Route::get('/{player:slug}', function (Player $player) {
    return view('player', [ 'player'=> $player ]);
})->middleware(['auth'])->name('player');

require __DIR__.'/auth.php';
