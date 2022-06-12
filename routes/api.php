<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Una ruta resource simple
*/

 Route::resource('zipcode', 'App\Http\Controllers\ZipcodeController');