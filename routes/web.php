<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternshipController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return redirect('/internships');
});

Route::get('/internships', [InternshipController::class, 'index']);

Route::get('/internships/create', [InternshipController::class, 'create']);

Route::post('/internships/store', [InternshipController::class, 'store']);

Route::delete('/internships/delete/{id}', [InternshipController::class, 'destroy']);