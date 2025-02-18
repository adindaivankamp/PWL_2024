<?php

use Illuminate\Support\Facades\Route; //mengimpor kelas Route yang digunakan untuk mendefinisikan routes.
use App\Http\Controllers\ItemController; //mengimpor controller ItemController yang akan menangani request yang terkait dengan "item".

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

Route::get('/', function () { //mendefinisikan route untuk path (jalur) /. 
    return view('welcome'); //mengembalikan view bernama welcome.
});

Route::resource('items', ItemController::class); //membuat beberapa route sekaligus untuk operasi CRUD (Create, Read, Update, Delete) pada "items".