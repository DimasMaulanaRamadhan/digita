<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KMeansController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MatematikaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('/welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Auth::routes();

Route::get('/logout', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/isi', function () {
    return view('isi');
})->name('isi');

Route::get('/jawa', function () {
    return view('jawa');
})->name('jawa');

Route::get('/sumatera', function () {
    return view('sumatera');
})->name('sumatera');

Route::get('/bali', function () {
    return view('bali');
})->name('bali');

Route::get('/jatim', function () {
    return view('jatim');
})->name('jatim');

Route::get('/jateng', function () {
    return view('jateng');
})->name('jateng');

Route::get('/jabar', function () {
    return view('jabar');
})->name('jabar');

Route::get('/sumut', function () {
    return view('sumut');
})->name('sumut');

Route::get('/sumsel', function () {
    return view('sumsel');
})->name('sumsel');

Route::get('/sumbar', function () {
    return view('sumbar');
})->name('sumbar');

Route::get('/bali', function () {
    return view('bali');
})->name('bali');

Route::get('/aceh', function () {
    return view('aceh');
})->name('aceh');

Route::get('/baliaceh', function () {
    return view('baliaceh');
})->name('baliaceh');


// Jawa Timur
Route::get('jatim/ceritajatim', function () {
    return view('jatim.ceritajatim');
})->name('ceritajatim');

Route::get('jatim/senjatajatim', function () {
    return view('jatim.senjatajatim');
})->name('senjatajatim');

Route::get('jatim/lagujatim', function () {
    return view('jatim.lagujatim');
})->name('lagujatim');

Route::get('jatim/tarijatim', function () {
    return view('jatim.tarijatim');
})->name('tarijatim');

Route::get('jatim/rumahjatim', function () {
    return view('jatim.rumahjatim');
})->name('rumahjatim');

Route::get('jatim/pakaianjatim', function () {
    return view('jatim.pakaianjatim');
})->name('pakaianjatim');


// Jawa Tengah
Route::get('jateng/ceritajateng', function () {
    return view('jateng.ceritajateng');
})->name('ceritajateng');

Route::get('jateng/senjatajateng', function () {
    return view('jateng.senjatajateng');
})->name('senjatajateng');

Route::get('jateng/lagujateng', function () {
    return view('jateng.lagujateng');
})->name('lagujateng');

Route::get('jateng/tarijateng', function () {
    return view('jateng.tarijateng');
})->name('tarijateng');

Route::get('jateng/rumahjateng', function () {
    return view('jateng.rumahjateng');
})->name('rumahjateng');

Route::get('jateng/pakaianjateng', function () {
    return view('jateng.pakaianjateng');
})->name('pakaianjateng');


// Jawa Barat
Route::get('jabar/ceritajabar', function () {
    return view('jabar.ceritajabar');
})->name('ceritajabar');

Route::get('jabar/senjatajabar', function () {
    return view('jabar.senjatajabar');
})->name('senjatajabar');

Route::get('jabar/lagujabar', function () {
    return view('jabar.lagujabar');
})->name('lagujabar');

Route::get('jabar/tarijabar', function () {
    return view('jabar.tarijabar');
})->name('tarijabar');

Route::get('jabar/rumahjabar', function () {
    return view('jabar.rumahjabar');
})->name('rumahjabar');

Route::get('jabar/pakaianjabar', function () {
    return view('jabar.pakaianjabar');
})->name('pakaianjabar');


// Sumatera Barat
Route::get('sumbar/ceritasumbar', function () {
    return view('sumbar.ceritasumbar');
})->name('ceritasumbar');

Route::get('sumbar/senjatasumbar', function () {
    return view('sumbar.senjatasumbar');
})->name('senjatasumbar');

Route::get('sumbar/lagusumbar', function () {
    return view('sumbar.lagusumbar');
})->name('lagusumbar');

Route::get('sumbar/tarisumbar', function () {
    return view('sumbar.tarisumbar');
})->name('tarisumbar');

Route::get('sumbar/rumahsumbar', function () {
    return view('sumbar.rumahsumbar');
})->name('rumahsumbar');

Route::get('sumbar/pakaiansumbar', function () {
    return view('sumbar.pakaiansumbar');
})->name('pakaiansumbar');


// Sumatera Utara
Route::get('sumut/ceritasumut', function () {
    return view('sumut.ceritasumut');
})->name('ceritasumut');

Route::get('sumut/senjatasumut', function () {
    return view('sumut.senjatasumut');
})->name('senjatasumut');

Route::get('sumut/lagusumut', function () {
    return view('sumut.lagusumut');
})->name('lagusumut');

Route::get('sumut/tarisumut', function () {
    return view('sumut.tarisumut');
})->name('tarisumut');

Route::get('sumut/rumahsumut', function () {
    return view('sumut.rumahsumut');
})->name('rumahsumut');

Route::get('sumut/pakaiansumut', function () {
    return view('sumut.pakaiansumut');
})->name('pakaiansumut');


// Sumatera Selatan
Route::get('sumsel/ceritasumsel', function () {
    return view('sumsel.ceritasumsel');
})->name('ceritasumsel');

Route::get('sumsel/senjatasumsel', function () {
    return view('sumsel.senjatasumsel');
})->name('senjatasumsel');

Route::get('sumsel/lagusumsel', function () {
    return view('sumsel.lagusumsel');
})->name('lagusumsel');

Route::get('sumsel/tarisumsel', function () {
    return view('sumsel.tarisumsel');
})->name('tarisumsel');

Route::get('sumsel/rumahsumsel', function () {
    return view('sumsel.rumahsumsel');
})->name('rumahsumsel');

Route::get('sumsel/pakaiansumsel', function () {
    return view('sumsel.pakaiansumsel');
})->name('pakaiansumsel');


// Aceh
Route::get('aceh/ceritaaceh', function () {
    return view('aceh.ceritaaceh');
})->name('ceritaaceh');

Route::get('aceh/senjataaceh', function () {
    return view('aceh.senjataaceh');
})->name('senjataaceh');

Route::get('aceh/laguaceh', function () {
    return view('aceh.laguaceh');
})->name('laguaceh');

Route::get('aceh/tariaceh', function () {
    return view('aceh.tariaceh');
})->name('tariaceh');

Route::get('aceh/rumahaceh', function () {
    return view('aceh.rumahaceh');
})->name('rumahaceh');

Route::get('aceh/pakaianaceh', function () {
    return view('aceh.pakaianaceh');
})->name('pakaianaceh');


// Bali
Route::get('bali/ceritabali', function () {
    return view('bali.ceritabali');
})->name('ceritabali');

Route::get('bali/senjatabali', function () {
    return view('bali.senjatabali');
})->name('senjatabali');

Route::get('bali/lagubali', function () {
    return view('bali.lagubali');
})->name('lagubali');

Route::get('bali/taribali', function () {
    return view('bali.taribali');
})->name('taribali');

Route::get('bali/rumahbali', function () {
    return view('bali.rumahbali');
})->name('rumahbali');

Route::get('bali/pakaianbali', function () {
    return view('bali.pakaianbali');
})->name('pakaianbali');


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetForm'])->name('forget-password');
Route::post('reset-password', [ForgotPasswordController::class, 'updatePassword'])->name('reset-password');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kmeans', [KMeansController::class, 'kMeans'])->name('kMeans');
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/user', [RegisterController::class, 'store'])->name('store');
Route::get('/profil', [DataController::class, 'showUser'])->name('profil');
Route::get('/profiladmin', [DataController::class, 'showUser2'])->name('profilaadmin');
Route::get('/data/create', [DataController::class, 'create'])->name('data.create');
Route::get('/data/{data}', [DataController::class, 'show'])->name('data.show');
Route::get('/data/{data}/edit', [DataController::class, 'edit'])->name('data.edit');
Route::patch('/data/{data}', [DataController::class, 'update'])->name('data.update');
Route::get('/hasil/{data}', [DataController::class, 'show'])->name('data.show');
Route::get('/hasil/{data}', [KMeansController::class, 'show'])->name('show');
Route::resource('CRUD', DataController::class)->scoped();

Auth::routes();

Route::post('/data', [DataController::class, 'store'])->name('data.store');
Route::get('/data/create', [DataController::class, 'create'])->name('data.create');

Route::get('/data/{data}/edit', [DataController::class, 'edit'])->name('data.edit');
Route::patch('/data/{data}', [DataController::class, 'update'])->name('data.update');
Route::post('/data', [DataController::class, 'store'])->name('data.store');

Route::get('/hasil', [DataController::class, 'index'])->name('hasil');
Route::get('/hasil/{data}', [DataController::class, 'show'])->name('data.show');

Route::get('/hasil/{data}', [DataController::class, 'show'])->name('data.show');
Route::get('/hasil', [DataController::class, 'index'])->name('hasil');
Route::get('/hasiladmin', [DataController::class, 'index2'])->name('hasiladmin');

Route::get('admin', function(){
    return view('homeadmin');
})->name('admin')->middleware('admin');


Route::get('user', function(){
    return view('home');
})->name('user')->middleware('user');

Route::delete('/hasiladmin/delete/{data_pengguna}', [DataController::class, 'destroy'])
    ->name('hasiladmin.destroy');

    Route::post('/store-review', [ReviewController::class, 'store'])->name('storeReview');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
