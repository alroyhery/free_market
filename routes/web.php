<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SendEmailController;

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

Route::resource('report', ReportController::class);
Route::get('screenshot', [ReportController::class, 'screenshot'])->name('screenshot');
Route::get('sendEmailBody', [SendEmailController::class, 'sendEmailBody']);

Route::post('getParameter', [APIController::class, 'getParameter']);
