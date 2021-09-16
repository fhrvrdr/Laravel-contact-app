<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RehberController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('rehber');
})->name('dashboard');

Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {

    Route::resource('rehber', RehberController::class)->names([
        'index' => 'rehber',
    ]);
});

Route::get("search", [SearchController::class, 'search'])->name('search');
