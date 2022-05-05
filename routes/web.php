<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf', [\App\Http\Controllers\GeneratePdfController::class, 'show'])->name('get-pdf');

Route::post('/test', function (Request $request) {
    $data = \Illuminate\Support\Facades\Validator::make($request->all(), [
        'tel' => 'required',
        'valid' => 'accepted',
    ])->validate();
    dd($data);
})->name('test');
