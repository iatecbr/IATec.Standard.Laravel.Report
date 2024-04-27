<?php

use App\Http\Controllers\Examples\ExampleController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/examples')->group(function () {
    Route::get('/example/{id}', [ExampleController::class, 'build']);
});
