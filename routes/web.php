<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ChatBotController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

Route::get('/produk-korporasi', function () {
    return view('admin.data_produk_korporasi');
});

Route::get('/produk-retail', function () {
    return view('admin.data_produk_retail');
});

Route::get('/edit-produkKorporasi', function () {
    return view('admin.edit_produk_korporasi');
});

Route::get('/edit-produkRetail', function () {
    return view('admin.edit_produk_retail');
});

Route::post('/submit-form', [MessageController::class, 'store'])->name('submit-form');
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

//LOGIN
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin')->middleware('guest');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register')->middleware('guest');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister')->middleware('guest');


//SUPER ADMIN
Route::get('manageaccount', [HomeController::class, 'manageaccount'])->name('manageaccount');
Route::get('activate/{id}', [HomeController::class, 'activateaccount'])->name('activateaccount');

//ADMIN
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//LAYANAN
Route::get('layananadmin', [PostController::class, 'viewLayanan'])->name('layananadmin')->middleware('auth');
Route::get('createlayanan', [PostController::class, 'createLayanan'])->name('createlayanan')->middleware('auth');
Route::post('storelayanan', [PostController::class, 'storeLayanan'])->name('storelayanan')->middleware('auth');
Route::get('detaillayanan/{id}', [PostController::class, 'detailLayanan'])->name('detaillayanan')->middleware('auth');
Route::get('editlayanan/{id}', [PostController::class, 'editLayanan'])->name('editlayanan')->middleware('auth');
Route::put('updatelayanan/{id}', [PostController::class, 'updateLayanan'])->name('updatelayanan')->middleware('auth');


//DOKUMEN LAYANAN
Route::get('createdokumenlayanan', [DocumentController::class, 'createDokumenLayanan'])->name('createDokumenlayanan')->middleware('auth');
Route::post('storedokumenlayanan', [DocumentController::class, 'storeDokumenLayanan'])->name('storedokumenlayanan')->middleware('auth');
Route::post('/upload', [DocumentController::class, 'upload'])->name('upload')->middleware('auth');
Route::get('/download/{id}', [DocumentController::class, 'download'])->name('download')->middleware('auth');

//VISI
Route::get('visiadmin', [PostController::class, 'viewVisi'])->name('visiadmin')->middleware('auth');
Route::get('createvisi', [PostController::class, 'createVisi'])->name('createvisi')->middleware('auth');
Route::post('storevisi', [PostController::class, 'storeVisi'])->name('storevisi')->middleware('auth');
Route::get('detailvisi/{id}', [PostController::class, 'detailvisi'])->name('detailvisi')->middleware('auth');
Route::get('editvisi/{id}', [PostController::class, 'editVisi'])->name('editvisi')->middleware('auth');
Route::put('updatevisi/{id}', [PostController::class, 'updateVisi'])->name('updatevisi')->middleware('auth');
Route::get('/chat', [ChatBotController::class, 'showChat']);
Route::post('/chat/send', [ChatBotController::class, 'sendMessage']);

//MISI
Route::get('misiadmin', [PostController::class, 'viewMisi'])->name('misiadmin')->middleware('auth');
Route::get('createmisi', [PostController::class, 'createMisi'])->name('createmisi')->middleware('auth');
Route::post('storemisi', [PostController::class, 'storeMisi'])->name('storemisi')->middleware('auth');
Route::get('detailmisi/{id}', [PostController::class, 'detailmisi'])->name('detailmisi')->middleware('auth');
Route::get('editmisi/{id}', [PostController::class, 'editMisi'])->name('editmisi')->middleware('auth');
Route::put('updatemisi/{id}', [PostController::class, 'updateMisi'])->name('updatemisi')->middleware('auth');

//STRUKTUR
Route::get('strukturadmin', [PostController::class, 'viewStruktur'])->name('strukturadmin')->middleware('auth');
Route::get('createstruktur', [PostController::class, 'createStruktur'])->name('createstruktur')->middleware('auth');
Route::post('storestruktur', [PostController::class, 'storeStruktur'])->name('storestruktur')->middleware('auth');
Route::get('detailstruktur/{id}', [PostController::class, 'detailstruktur'])->name('detailstruktur')->middleware('auth');
Route::get('editstruktur/{id}', [PostController::class, 'editStruktur'])->name('editstruktur')->middleware('auth');
Route::put('updatestruktur/{id}', [PostController::class, 'updateStruktur'])->name('updatestruktur')->middleware('auth');


//CUSTOMER
Route::get('/beranda', [CustomerController::class, 'beranda'])->name('beranda')->middleware('auth');
Route::get('pengajuan', [CustomerController::class, 'pengajuan'])->name('customer.pengajuan')->middleware('auth');
Route::post('storepengajuan', [CustomerController::class, 'storePengajuan'])->name('storepengajuan')->middleware('auth');
Route::get('statuspengajuan', [CustomerController::class, 'statusPengajuan'])->name('statuspengajuan')->middleware('auth');
Route::get('/cekStatusPengajuan', [CustomerController::class, 'cekStatusPengajuan'])->name('cekStatusPengajuan');

Route::get('/kesehatan', [CustomerController::class, 'kesehatan'])->name('customer.kesehatan');
Route::get('kecelakaan', [CustomerController::class, 'kecelakaan'])->name('customer.kecelakaan');


//GUEST
Route::get('', [HomeController::class, 'landingpage']);
// Route::get('produk', [HomeController::class, 'produk']);
// Route::get('layanan', [HomeController::class, 'layanan']);
// Route::get('sejarah', [HomeController::class, 'sejarah']);
// Route::get('visimisi', [HomeController::class, 'visimisi']);
// Route::get('struktur', [HomeController::class, 'struktur']);
// Route::get('landingpage', [HomeController::class, 'landingpage']);
