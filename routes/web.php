<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pertama;

Route::get('/', function () {
    return 'helloworld';
});
Route::get('/satu', function () {
    return view('welcome');
});
// required paramater
Route::get('/user{id}', function (string $id) {
    return 'user'.$id;
});
// optional parameter
Route::get('/user2/{name?}', function (string $name = null) {
    return $name;
});
// route dengan controller
Route::get('/dua', [pertama::class, 'satu']);
Route::get('/tiga', [pertama::class, 'dua']);
Route::get('/empat/{id}', [pertama::class, 'tiga']);
// names route
Route::get('/user/profile', function () {
    echo "tampilkan profile";
})->name('profile');
Route::get('/profile', function () {
    return redirect()->route('profile');
});
//Regular Expression Constraints
Route::get('/user4/{id}', function (string $id) {
    echo "Tampilkan Angka: ".$id; })->where('id', '[0-9]+');

Route::get('/user4/{name}', function (string $name) {
    echo "Tampilkan Nama ". $name; })->where('name ', '[A-Za-z]+');

//Route Group
Route::prefix('admin')->group (function () {
    Route::get('/users', function () { 
        // Matches The "/admin/users" URL 
        echo 'tes group user';
        });
    Route::get('/admin', function () { 
        // Matches The "/admin/users" URL 
        echo 'tes group dua';
        });
    });

