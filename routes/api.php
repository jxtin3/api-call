<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;


Route::get('/courses', [CoursesController::class, 'index']);
Route::post('/courses', [CoursesController::class, 'store']);
Route::delete('/courses', [CoursesController::class, 'destroyAll']);

Route::get('/courses/{id}', [CoursesController::class, 'show']);
Route::put('/courses/{id}', [CoursesController::class, 'update']);
Route::patch('/courses/{id}', [CoursesController::class, 'patch']);
Route::delete('/courses/{id}', [CoursesController::class, 'destroy']);
