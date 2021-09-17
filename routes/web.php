<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrerController;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[HomeController::class,'index'])->name('home')->middleware(['auth']);
Route::get('dashboard',[DashboardController::class,'show'])->name('dashboard')->middleware(['auth']);
Route::get('delivery',[DeliveryController::class,'show'])->name('delivery')->middleware(['auth']);
Route::get('profil/{id}',[ProfilController::class,'show'])->name('profil.show')->middleware(['auth']);
Route::get('delivery/{id}',[DeliveryController::class,'getDelivery'])->name('delivery.getDelivery')->middleware(['auth']);

Route::post('/',[CommentController::class,'store'])->name('comment')->middleware(['auth']);
Route::post('delivery/{id}',[DeliveryController::class,'updateDelivery'])->name('delivery.updateDelivery')->middleware(['auth']);
Route::post('profil/{id}',[ProfilController::class,'modifyInfo'])->name('profil.modifyInfo')->middleware(['auth']);
Route::post('profil',[ProfilController::class,'store'])->name('profil')->middleware(['auth']);
Route::post('delivery',[DeliveryController::class,'store'])->name('delivery.store')->middleware(['auth']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// });



require __DIR__.'/auth.php';
