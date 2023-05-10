<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardChartController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardPenelitianController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\ProdiController;
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
Route::get('/dataApprove', [DashboardPenelitianController::class, 'approve'])->middleware('auth');
Route::put('/dataApprove/{penelitian:id}', [DashboardPenelitianController::class, 'approveEdit'])->middleware('auth');
Route::get('/data/{penelitian:id}', [DashboardPenelitianController::class, 'show'])->middleware('auth');
Route::get('/penelitianku/{dosen:id}', [DashboardPenelitianController::class, 'showPenelitianku'])->middleware('auth');
Route::delete('/penelitianku/{penelitian:id}', [DashboardPenelitianController::class, 'destroy'])->middleware('auth');
Route::get('/tambahPenelitian', [PenelitianController::class, 'create'])->middleware('auth');
Route::post('/tambahPenelitian', [PenelitianController::class, 'store'])->middleware('auth');
Route::get('/tambahAnggota', [PenelitianController::class, 'create2'])->middleware('auth');
Route::get('/tambahAnggota2/{penelitian:id}', [PenelitianController::class, 'tambahAnggota'])->middleware('auth');
Route::post('/tambahAnggota2', [PenelitianController::class, 'tambah'])->middleware('auth');
Route::post('/tambahAnggota', [PenelitianController::class, 'store2'])->middleware('auth');


Route::get('/dataprodi', [DashboardPenelitianController::class, 'prodibased'])->middleware('auth');



Route::get('/dataproditahun', [DashboardPenelitianController::class, 'filterPenelitian'])->middleware('auth');
Route::get('/export-penelitian/{id}/{tahun}', [UserController::class, 'export'])->middleware('auth');
Route::get('/export-penelitian', [UserController::class, 'exportAll'])->middleware('auth');
Route::get('/dataprodi/{penelitian:prodi_id}', [DashboardPenelitianController::class, 'prodibasedData'])->middleware('auth');


Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/tambah-user', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/tambah-user', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'validation']);
Route::post('/logout', [LoginController::class, 'logout']);


// Route::resource('/profile', DashboardDosenController::class)->middleware('auth');

Route::get('/profile', [DosenController::class, 'index'])->middleware('auth');
Route::get('/detailProfile/{dosen:id}', [DosenController::class, 'detail'])->middleware('auth');
Route::get('/profile/{dosen:id}', [DosenController::class, 'edit'])->middleware('auth');
Route::put('/profile/{dosen:id}', [DosenController::class, 'update'])->middleware('auth');

Route::get('/kelolaProdi', [ProdiController::class, 'index'])->middleware('auth');
Route::get('/addProdi', [ProdiController::class, 'create'])->middleware('auth');
Route::post('/addProdi', [ProdiController::class, 'store'])->middleware('auth');
Route::delete('/addProdi/{prodi:id}', [ProdiController::class, 'destroy'])->middleware('auth');
Route::get('/editProdi/{prodi:id}', [ProdiController::class, 'edit'])->middleware('auth');
Route::post('/editProdi/{prodi:id}', [ProdiController::class, 'update'])->middleware('auth');


Route::get('/kelolaUser', [UserController::class, 'showAll'])->middleware('auth');
Route::delete('/user/{dosen:id}', [UserController::class, 'destroy'])->middleware('auth');


Route::get('/pengumuman', [AnnouncementController::class, 'index'])->middleware('auth');
Route::delete('/pengumuman/{announcement}', [AnnouncementController::class, 'destroy'])->middleware('auth');
Route::get('/editpengumuman/{announcement}', [AnnouncementController::class, 'edit'])->middleware('auth');
Route::put('/editpengumuman/{announcement}', [AnnouncementController::class, 'update'])->middleware('auth');
Route::get('/semuapengumuman', [AnnouncementController::class, 'semuaPengumuman'])->middleware('auth');
Route::post('/tambahpengumuman', [AnnouncementController::class, 'store'])->middleware('auth');
Route::get('/tambahpengumuman', [AnnouncementController::class, 'indexadd'])->middleware('auth');
Route::get('/detailpengumuman/{pengumuman:id}', [AnnouncementController::class, 'show'])->middleware('auth');;




Route::get('/kelolapengumuman', function () {
    return view('announcement.kelolaAnnouncement', ['title' => 'kelola Pengumuman']);
});


// Harus Paling Bawah
Route::get('/{id}/{tahun}', [DashboardPenelitianController::class, 'detail'])->middleware('auth');
