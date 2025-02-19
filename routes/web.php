<?php

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KepsekController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ManageSiswaController;
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

Route::get('/', [LandingController::class,'index']);

/****
 * VIP
 ****/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/****
 * Admin
 ****/

Route::get('admin',[AdminController::class,'index']);
Route::get('admin/create',[AdminController::class,'create']);
Route::post('admin/create',[AdminController::class,'store']);
Route::get('admin/edit/{id}',[AdminController::class,'edit']);
Route::delete('admin/edit/{id}',[AdminController::class,'destroy']);
// Route::post('admin/edit/{id}',[AdminController::class,'edit']);

Route::get('/dashboard/admin', function () {
    return view('pages.admin.index');
})->middleware(['auth','admin'])->name('admin-dashboard');


Route::get('/user/form',function(){
    return view('pages.siswa.index');
});

Route::get('/helpdesk', function () {
    return view('pages.helpdesk');
})->middleware(['auth'])->name('helpdesk');

Route::get('/form',[SiswaController::class,'index'])->middleware(['auth'])->name('form');

Route::get('guru',[GuruController::class,'index']);
Route::get('guru/edit/{id}',[GuruController::class,'edit']);
Route::post('guru/edit/{id}',[GuruController::class,'update']);

Route::get('kepsek',[KepsekController::class,'index']);
Route::get('kepsek/edit',[KepsekController::class,'edit']);
Route::post('kepsek/edit',[KepsekController::class,'update']);

Route::get('/status', [SiswaController::class,'status'])->middleware(['auth']);

Route::get('/statistik', function () {
    $siswa = Siswa::all();
    return view('pages.statistik')->with(['siswa'=>$siswa]);
})->middleware(['auth','can:is-admin'])->name('statistik');

Route::get('/pendaftar', [ManageSiswaController::class,'index'])->middleware(['auth','can:is-admin'])->name('pendaftar');
Route::get('/pendaftar/{id}', [ManageSiswaController::class,'show'])->middleware(['auth','can:is-admin']);
Route::post('/pendaftar/{id}', [ManageSiswaController::class,'update'])->middleware(['auth','can:is-admin']);
Route::patch('/pendaftar/{id}', [ManageSiswaController::class,'updateSeleksi'])->middleware(['auth','can:is-admin']);

/****
 * Siswa
 ****/


Route::post('/form', [SiswaController::class,'store'])->middleware(['auth']);

Route::post('/upload-bayar',[SiswaController::class,'uploadBayar'])->middleware(['auth']);

Route::get('/download',[SiswaController::class,'download'])->middleware(['auth']);
Route::get('/download-bukti-diterima',[SiswaController::class,'downloadSeleksi'])->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('feedback',function(){
    return view('pages/feedback');
});



/****
 * Email Verification
 ****/

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');


// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/dashboard');
// })->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Link verifikasi terkirim!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/export/{type}',[AdminController::class,'export']);


require __DIR__.'/auth.php';
