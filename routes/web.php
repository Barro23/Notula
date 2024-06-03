<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', [Controller::class,'index'])->name('index');
Route::get('/sobre', [Controller::class,'sobre'])->name('sobre');