<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\LessonController;
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
})->name('frontpage');


Route::get('/intro', function () {
    return view('intro');
})->name('intro')->middleware('auth');


Route::get('/chapter1', function () {
    return view('chapter1');
})->name('chapter1')->middleware('auth');


Route::get('/chapter2', function () {
    return view('chapter2');
})->name('chapter2')->middleware('auth');


Route::get('/chapter3', function () {
    return view('chapter3');
})->name('chapter3')->middleware('auth');

Route::get('/crud', function () {
    return view('crud');
})->name('crud')->middleware('auth');

Route::resource('lessons', LessonController::class)->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');