<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BakimController;
use App\Http\Controllers\BesinController;
use App\Http\Controllers\HayvanController;
use App\Http\Controllers\KullaniciController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonelController;


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('registerP', [AuthController::class, 'registerP'])->name('registerP');
Route::post('login', [AuthController::class, 'loginP'])->name('loginP');
Route::get("logout",[AuthController::class,"logoutP"])->name("logoutP");

//ADMİ PANEL
Route::get("/admin",function (){
    return view("adminPanel.app");
})->name("adminPanel.home");


Route::get('/personel', [PersonelController::class, 'index'])->name('admin.personel');
Route::get('/personel/create', [PersonelController::class, 'create'])->name('personel.create');
Route::post('/personel', [PersonelController::class, 'store'])->name('personel.store');
Route::get('/personel/{id}', [PersonelController::class, 'show'])->name('personel.show');
Route::get('/personel/{id}/edit', [PersonelController::class, 'edit'])->name('personel.edit');
Route::put('/personel/{id}', [PersonelController::class, 'update'])->name('personel.update');
Route::delete('/personel/{id}', [PersonelController::class, 'destroy'])->name('personel.destroy');


Route::get('/bakimlar', [BakimController::class, 'index'])->name('bakim.index');
Route::get('/bakimlar/create', [BakimController::class, 'create'])->name('bakim.create');
Route::post('/bakimlar', [BakimController::class, 'store'])->name('bakim.store');
Route::get('/bakimlar/{bakim}', [BakimController::class, 'show'])->name('bakim.show');
Route::get('/bakimlar/{bakim}/edit', [BakimController::class, 'edit'])->name('bakim.edit');
Route::put('/bakimlar/{bakim}', [BakimController::class, 'update'])->name('bakim.update');
Route::delete('/bakimlar/{bakim}', [BakimController::class, 'destroy'])->name('bakim.destroy');


Route::get('/hayvans', [HayvanController::class, 'index'])->name('hayvan.index');
Route::get('/hayvans/create', [HayvanController::class, 'create'])->name('hayvan.create');
Route::post('/hayvans', [HayvanController::class, 'store'])->name('hayvan.store');
Route::get('/hayvans/{id}', [HayvanController::class, 'show'])->name('hayvan.show');
Route::get('/hayvans/{id}/edit', [HayvanController::class, 'edit'])->name('hayvan.edit');
Route::put('/hayvans/{id}', [HayvanController::class, 'update'])->name('hayvan.update');
Route::delete('/hayvans/{id}', [HayvanController::class, 'destroy'])->name('hayvan.destroy');

Route::get('/besinler', [BesinController::class, 'index'])->name('besin.index');
Route::get('/besinler/create', [BesinController::class, 'create'])->name('besin.create');
Route::post('/besinler', [BesinController::class, 'store'])->name('besin.store');
Route::get('/besinler/{besin}', [BesinController::class, 'show'])->name('besin.show');
Route::get('/besinler/{besin}/edit', [BesinController::class, 'edit'])->name('besin.edit');
Route::put('/besinler/{besin}', [BesinController::class, 'update'])->name('besin.update');
Route::delete('/besinler/{besin}', [BesinController::class, 'destroy'])->name('besin.destroy');

Route::get('/kullanicilar', [KullaniciController::class, 'index'])->name('kullanici.index');
Route::get('/kullanicilar/{id}', [KullaniciController::class, 'show'])->name('kullanici.show');
Route::delete('/kullanicilar/{id}', [KullaniciController::class, 'delete'])->name('kullanici.delete');

//ADMİN PANEL BİTİRİŞ



//USER PANEL

Route::get("/user",function (){
    return view("userPanel.master");
})->name("userPanel.home");

Route::get("/userPanel/bakim",[UserController::class,"getbakim"])->name("user.bakim");
Route::get("/userPanel/besin",[UserController::class,"getBesin"])->name("user.besin");
Route::get("/userPanel/hayvan",[UserController::class,"getHayvan"])->name("user.hayvan");

Route::get("/userPanel/personel",[UserController::class,"getPersonel"])->name("user.personel");
