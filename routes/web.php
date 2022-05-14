<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardChartController;
use App\Http\Controllers\DashboardPenelitianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [HomeController::class, 'index']);


Route::get('/home', [DashboardChartController::class, 'graphic']);
Route::get('/pieYear', [DashboardChartController::class, 'pieGraphic']);
Route::get('/barProdi', [DashboardChartController::class, 'barChartProdi']);
Route::get('/pieProdi', [DashboardChartController::class, 'pieChartProdi']);


Route::get('/data', [DashboardPenelitianController::class, 'index']);
Route::get('/data/{penelitian:id}', [DashboardPenelitianController::class, 'show']);

Route::get('/dataprodi', [DashboardPenelitianController::class, 'prodibased']);
Route::get('/dataprodi/{penelitian:prodi_id}', [DashboardPenelitianController::class, 'prodibasedData']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/pengumuman', function () {
    return view('announcement', [
        "title" => "Pengumuman",
        "name" => "Tsania Ursila Razani",
        "email" => "tsaniashella@it.student.pens.ac.id"
    ]);
});

Route::get('/hai', function () {
    return view('landingpage.page');
});