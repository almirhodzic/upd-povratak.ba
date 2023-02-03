<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StatutController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\Member\VerifyEmailController;
use App\Http\Controllers\Auth\Account\VerifyAccountController;
use App\Http\Controllers\MarketingController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/statut', [StatutController::class, 'index'])->name('statut.index');
    Route::get('/bank', [BankController::class, 'index'])->name('bank.index');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/member', [MemberController::class, 'index'])->name('member.index');
    Route::get('/member-signup', [MemberController::class, 'signup'])->name('member.signup');
    Route::post('/member-store', [MemberController::class, 'store'])->name('member.store');
    Route::get('/member/verify/{token}', [VerifyEmailController::class, 'verifyemail'])->name('member.verifyemail');
    Route::get('/account/verify/{token}', [VerifyAccountController::class, 'verifyaccount'])->name('account.verifyaccount');
    Route::get('/member-login', [AuthController::class, 'login'])->name('member.login');
    Route::get('/marketing', [MarketingController::class, 'index'])->name('marketing.index');
/**/

    Route::get('/dashboard', function () { return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

   Route::get('/artisan/config-cache', function() {
      $exitCode = Artisan::call('config:cache');
      return redirect()->back();
   });
   Route::get('/artisan/optimize', function() {
      $exitCode = Artisan::call('optimize');
      return redirect()->back();
   });
   Route::get('/artisan/view-clear', function() {
      $exitCode = Artisan::call('view:clear');
      return redirect()->back();
   });
   Route::get('/artisan/route-clear', function() {
      $exitCode = Artisan::call('route:clear');
      return redirect()->back();
   });
   Route::get('/artisan/clear-cache', function() {
      $exitCode = Artisan::call('cache:clear');
      return redirect()->back();
   });
   Route::get('/artisan/migrate', function() {
      $exitCode = Artisan::call('migrate', ["--force" => true ]);
      return redirect()->back();
   });
