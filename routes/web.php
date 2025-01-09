<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');


Route::get('/dashboard/admin', function () {
    return view('pages.admin.index');
})->middleware(['auth','verified','admin'])->name('admin-dashboard');


Route::get('/user/form',function(){
    return view('pages.siswa.index');
});

Route::get('/helpdesk', function () {
    return view('pages.helpdesk');
})->middleware(['auth','verified'])->name('helpdesk');

Route::get('/form', function () {
    return view('pages.form');
})->middleware(['auth','verified'])->name('form');

Route::get('/status', [SiswaController::class,'index'])->middleware(['auth','verified']);

Route::get('/statistik', function () {
    return view('pages.statistik');
})->middleware(['auth','verified'])->name('statistik');

Route::get('/pendaftar', function () {
    return view('pages.admin.pendaftar');
})->middleware(['auth','verified'])->name('pendaftar');

Route::post('/form', [SiswaController::class,'store'])->middleware(['auth','verified']);

Route::post('/upload-bayar',[SiswaController::class,'uploadBayar'])->middleware(['auth','verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Link verifikasi terkirim!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');



require __DIR__.'/auth.php';
