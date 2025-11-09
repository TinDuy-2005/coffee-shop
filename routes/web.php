<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/menu', [PageController::class, 'menu']);
Route::get('/beans-story', [PageController::class, 'beansStory']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/beans-story', function () {
    return view('beans-story');
});
Route::get('/menu/{id}', [PageController::class, 'showDrink']);