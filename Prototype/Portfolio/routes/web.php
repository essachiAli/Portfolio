<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Contracts\View\View

Route::get('/',[PortfolioController::class, 'home'])->name('home');
Route::get('/contact');
