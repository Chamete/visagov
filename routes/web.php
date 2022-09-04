<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use config\LaravelLocalization;

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
    return view('visagov.index');
});

Route::get('/visagov', function () {
    return view('visagov.index');
});

Route::get('/libros/libros', function () {
    return view('visagov.libros');
});

/* Route::get('/libros', function () {
    return view('visagov.libros');
}); */

Route::get('/libros', [BooksController::class, 'index'])->name('libros');

Route::post('/libros', [BooksController::class, 'store'])->name('libros');

Route::get('/libros/{id}', [BooksController::class, 'show'])->name('libros-edit');
Route::patch('/libros/{id}', [BooksController::class, 'update'])->name('libros-update');
Route::delete('/libros/{id}', [BooksController::class, 'destroy'])->name('libros-destroy');

Route::get('/contacto', function () {
    return view('visagov.contacto');
});





