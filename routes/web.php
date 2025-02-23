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

Route::get('/hello', function () { 
    return 'Hello World';
});

Route::get('/world', function () { 
    return 'World';
});

Route::get('/sd', function() {
    return 'Selamat Datang';
});

Route::get('/about', function() {
    return 'Nama : Adinda Ivanka Maysanda Putri, 
    NIM : 2341760058';
});

Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
    
Route::get('/articles/{Id}', function($Id) {
    return 'Halaman Artikel dengan ID : '. $Id;
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});


