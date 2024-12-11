<?php

use App\Http\Controllers\main_prauts_hafidzibnu;
use App\Http\Controllers\main_pwl;
use App\Http\Controllers\prauts_1;
use App\Http\Controllers\UTS_hafidzController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo 10 + 10, "<br>";
    echo 15000 * 0.9, "<br>";
    date_default_timezone_set('Asia/Jakarta');
    echo date('d M Y h:i:s'), "\n";
});

Route::get('BarangKeluar', function () {
    echo (
        "Palembang" . "<br>" .
        date('l, d/M/y') . "<p>" .
        "Laporan Barang Keluar" . "<p>"
    );

    echo "Baju";
    echo "<br>";
    $a = 250000 * 10;
    echo "250000 * 10 = ", $a;
    echo "<p>";

    echo "Jaket";
    echo "<br>";
    $b = 500000 * 50;
    echo "500000 * 50 = ", $b;
    echo "<p>";

    echo "Perlengkapan";
    echo "<br>";
    $c = 150000 * 100;
    echo "150000 * 100 = ", $c;
    echo "<p>";

    echo "Total";
    echo "<br>";
    echo "$a + $b+ $c = Rp", number_format($a + $b + $c, 2, ",", ".");
});

Route::post('var/{n1}/{n2}', function ($nama, $alamat) {
    echo $nama;
    echo $alamat;
});

Route::get('token', function () {
    return csrf_token();
});

Route::post('Biodata', function (Request $request) {
    echo $request->nama . "<br>";
    echo $request->alamat . "<br>";
    echo $request->umur . "<br>";
});

Route::post('Soal', function (Request $request) {
    echo "Latihan Saya : " . $request->nama . "<br>";
    echo $request->a1 . " " . $request->a2 . "<br>";
    echo "Luas Lingkaran : " . floor(pi() * ($request->n0 ** 2)) . "<br>";
    echo "Nilai Akhir : " . ((($request->n1 + $request->n2) - $request->n3) * $request->n4) / $request->n5;
});

Route::post('logika1', [main_pwl::class, 'logika1']);

Route::post('logika2', [main_pwl::class, 'logika2']);

Route::post('prauts_hafidzibnu', [main_prauts_hafidzibnu::class, 'transaksi']);

Route::post("UTS_Hafidz", [UTS_hafidzController::class, 'pesanTiket']);
