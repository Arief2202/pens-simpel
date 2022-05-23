<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardChartController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardPenelitianController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('login');


Route::get('/home', [DashboardChartController::class, 'graphic'])->middleware('auth');
Route::get('/pieYear', [DashboardChartController::class, 'pieGraphic'])->middleware('auth');
Route::get('/barProdi', [DashboardChartController::class, 'barChartProdi'])->middleware('auth');
Route::get('/pieProdi', [DashboardChartController::class, 'pieChartProdi'])->middleware('auth');


Route::get('/data', [DashboardPenelitianController::class, 'index'])->middleware('auth');
Route::get('/data/{penelitian:id}', [DashboardPenelitianController::class, 'show'])->middleware('auth');
Route::get('/penelitianku/{dosen:id}', [DashboardPenelitianController::class, 'showPenelitianku'])->middleware('auth');

Route::get('/dataprodi', [DashboardPenelitianController::class, 'prodibased'])->middleware('auth');

//manggil
Route::get('/filterprodi/{id}/{tahun}', [DashboardPenelitianController::class, 'detail'])->middleware('auth');


Route::get('/dataproditahun', [DashboardPenelitianController::class, 'filterPenelitian'])->middleware('auth');
Route::get('/dataprodi/{penelitian:prodi_id}', [DashboardPenelitianController::class, 'prodibasedData'])->middleware('auth');


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'validation']);
Route::post('/logout', [LoginController::class, 'logout']);


// Route::resource('/profile', DashboardDosenController::class)->middleware('auth');

Route::get('/profile', [DosenController::class, 'index'])->middleware('auth');
Route::get('/profile/{dosen:id}', [DosenController::class, 'edit'])->middleware('auth');
Route::put('/profile/{dosen:id}', [DosenController::class, 'update'])->middleware('auth');


Route::get('/pengumuman', function () {
    return view('announcement', [
        "title" => "Pengumuman",
        "name" => "Tsania Ursila Razani",
        "email" => "tsaniashella@it.student.pens.ac.id"
    ]);
});


Route::get('/detailpengumuman', function () {
    return view('detailAnnouncement', [
        "title" => "Pengumuman",
        "name" => "Tsania Ursila Razani",
        "email" => "tsaniashella@it.student.pens.ac.id"
    ]);
});

Route::get('/tambahpengumuman', function () {
    return view('addAnnouncement', [
        "title" => "Pengumuman",
        "name" => "Tsania Ursila Razani",
        "email" => "tsaniashella@it.student.pens.ac.id"
    ]);
});

// Route::get('/logout', function () {
//     return view('logout', [
//         "title" => "Keluar Akun"
//     ]);
// });
