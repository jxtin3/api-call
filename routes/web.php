<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $courses = \App\Models\Course::all();
    return view('courses', ['courses' => $courses]);
});
