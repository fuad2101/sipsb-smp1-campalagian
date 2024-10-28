<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

/****
USER Route
 ****/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $role = auth()->user()->role;
    if($role == 'admin'){
        return view('pages.admin.index');
    }elseif($role == 'vip') {
        return view('pages.vip.index');
    }else{
        return view('dashboard');
    }
})->middleware(['auth','verified'])->name('dashboard');


/****
ADMIN Route
 ****/
Route::get('/dashboard/admin', function () {
    return view('pages.admin.index');
})->middleware(['auth','verified','admin'])->name('admin-dashboard');


/****
MY ROUTE
 ****/

Route::get('/user/form',function(){
    return view('pages.siswa.index');
});

Route::get('/helpdesk', function () {
    return view('pages.helpdesk');
})->middleware(['auth','verified'])->name('helpdesk');

Route::get('/form', function () {
    return view('pages.form');
})->middleware(['auth','verified'])->name('form');



/****
Email & Auth Route
 ****/

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
