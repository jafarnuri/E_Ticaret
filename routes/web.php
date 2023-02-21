<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AyarlarController;
use App\Http\Controllers\HaqqimizdaController;
use App\Http\Controllers\KullaniciController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\UrunlerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\RegisterController;


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

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('shopping/home');
    })->name('home');
    

});

Route::get('/admin', function () {
    return view('admin/home');
})->name('admin');

//AdminController

Route::get('/genelayar', [AdminController::class,'genelayar'])->name('genelayar');
Route::get('/apiayar', [AdminController::class,'apiayar'])->name('apiayar');
Route::get('/haqqimizdayar', [AdminController::class,'haqqimizdayar'])->name('haqqimizdaayar');
Route::get('/iletisimayar', [AdminController::class,'iletisimayar'])->name('iletisimayar');
Route::get('/kullaniciayar', [AdminController::class,'kullaniciayar'])->name('kullaniciayar');
Route::get('/sliderayar', [AdminController::class,'sliderayar'])->name('sliderayar');
Route::get('/smtpayar', [AdminController::class,'smtpayar'])->name('smtpayar');
Route::get('/sosialayar', [AdminController::class,'sosialayar'])->name('sosialayar');
Route::get('/kullaniciduzenlee/{id}', [AdminController::class,'kullaniciduzenle']);
Route::get('/bankaduzenle/{id}', [AdminController::class,'bankaduzenle']);
Route::get('/bankaekle', [AdminController::class,'bankaekle'])->name('bankaekle');
Route::get('/banka', [AdminController::class,'banka'])->name('banka');
Route::get('/kategoriduzenle/{id}', [AdminController::class,'katagoriduzenle']);
Route::get('/katagoriekle', [AdminController::class,'katagoriekle'])->name('katagoriekle');
Route::get('/katagori', [AdminController::class,'katagori'])->name('katagori');
Route::get('/menuduzenle', [AdminController::class,'menuduzenle'])->name('menuduzenle');
Route::get('/menuekle', [AdminController::class,'menuekle'])->name('menuekle');
Route::get('/menu', [AdminController::class,'menu'])->name('menu');
Route::get('/sliderduzenle', [AdminController::class,'sliderduzenle'])->name('sliderduzenle');
Route::get('/sliderekle', [AdminController::class,'sliderekle'])->name('sliderekle');
Route::get('/slider', [AdminController::class,'slider'])->name('slider');
Route::get('/urunduzenle/{id}', [AdminController::class,'urunduzenle'])->name('urunduzenle');
Route::get('/urunekle', [AdminController::class,'urunekle'])->name('urunekle');
Route::get('/urunfotoyukle', [AdminController::class,'urunfotoyukle'])->name('urunfotoyukle');
Route::get('/urun', [AdminController::class,'urun'])->name('urun');
Route::get('/urungalari', [AdminController::class,'urungalari'])->name('urungalari');
Route::get('/yorum', [AdminController::class,'yorum'])->name('yorum');


//AyarlarController

Route::post('/genelupdate', [AyarlarController::class,'genelayarguncel'])->name('genelayarupdate');
Route::post('/resimupdate', [AyarlarController::class,'resimguncel'])->name('resimupdate');
Route::post('/logoupdate', [AyarlarController::class,'logoguncel'])->name('logoupdate');
Route::post('/iletisimupdate', [AyarlarController::class,'iletisimayarguncel'])->name('iletisimupdate');
Route::post('/apiayarupdate', [AyarlarController::class,'apiayarguncel'])->name('apiayarupdate');
Route::post('/sosialupdate', [AyarlarController::class,'sosialayarguncel'])->name('sosialupdate');
Route::post('/smtpupdate', [AyarlarController::class,'smtpayarguncel'])->name('smtpupdate');

//HaqqimizdaController

Route::post('/haqqimizdaupdate', [HaqqimizdaController::class,'haqqimizdaguncel'])->name('haqqimizdaupdate');
Route::post('/logoguncel', [HaqqimizdaController::class,'logoguncel'])->name('logoguncel');
//KullaniciController

Route::post('/kullaniciupdate/{id}', [KullaniciController::class,'kullaniciguncel']);
Route::get('/kullanicidelete/{id}', [KullaniciController::class,'kullanicisil']);


//BankController

Route::post('/bankupdate/{id}', [BankController::class,'bankguncel']);
Route::post('/bankakayt', [BankController::class,'bankkaydet'])->name('bankkaydet');
Route::get('/bankdelete/{id}', [BankController::class,'banksil']);

//UrunlerController

Route::post('/urunleryukleme', [UrunlerController::class,'urunler'])->name('urunleryukleme');
Route::post('/urunupdate/{id}', [UrunlerController::class,'urunduzenle']);
Route::get('/urundelete/{id}', [UrunlerController::class,'urunsil']);
Route::get('/urundetay/{id}',[UrunlerController::class, 'urundetay']);

//KategoriController

Route::post('/kategorisave', [KategoriController::class,'kategorikaydet'])->name('kategorisave');
Route::post('/kategoriupdate/{id}', [KategoriController::class,'kategoriduzenle']);
Route::get('/kategorisil/{id}', [KategoriController::class,'kategorisil']);

    //ShoppingController 

    Route::get('/haqqimizda', [ShoppingController::class,'haqqimizda'])->name('haqqimizda');
    Route::get('/iletisim', [ShoppingController::class,'iletisim'])->name('iletisim');
    Route::get('/kategori', [ShoppingController::class,'kategori'])->name('kategori');
    Route::get('/kategorilist/{id}', [ShoppingController::class,'kategorilist']);
    
    //RegisterController
    Route::get('/register', [RegisterController::class,'registernew'])->name('register');
    Route::post('/register_action', [RegisterController::class,'register'])->name('register_action');
    Route::get('/login', [RegisterController::class,'loginnew'])->name('login');
    Route::post('/login_action', [RegisterController::class,'login'])->name('login_action');
    Route::get('/logout', [RegisterController::class,'logout'])->name('logout');
    Route::get('/hesabim', [RegisterController::class,'hesabim'])->name('hesabim');