<?php

use App\Http\Controllers\Frontend\front;
use Illuminate\Support\Facades\Route;

Route::get('/', [front::class, 'index']);
