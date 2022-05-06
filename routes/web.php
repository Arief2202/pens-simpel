<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardChartController;
use App\Http\Controllers\DashboardPenelitianController;

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

Route::get('/', [DashboardChartController::class, 'graphic']);
Route::get('/pieYear', [DashboardChartController::class, 'pieGraphic']);
Route::get('/barProdi', [DashboardChartController::class, 'barChartProdi']);
Route::get('/pieProdi', [DashboardChartController::class, 'pieChartProdi']);


Route::get('/data', [DashboardPenelitianController::class, 'index']);
Route::get('/data/{penelitian:id}', [DashboardPenelitianController::class, 'show']);
Route::get('/dataprodi', [DashboardPenelitianController::class, 'prodibased']);
Route::get('/dataprodi/{penelitian:prodi_id}', [DashboardPenelitianController::class, 'prodibasedData']);




Route::get('/pengumuman', function () {
    return view('announcement', [
        "title" => "Pengumuman",
        "name" => "Tsania Ursila Razani",
        "email" => "tsaniashella@it.student.pens.ac.id"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Masuk",
        "name" => "Tsania Ursila Razani",
        "email" => "tsaniashella@it.student.pens.ac.id"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "Daftar",
        "name" => "Tsania Ursila Razani",
        "email" => "tsaniashella@it.student.pens.ac.id"
    ]);
});
