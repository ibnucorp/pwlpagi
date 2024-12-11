<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main_prauts_hafidzibnu extends Controller
{
    public function transaksi(Request $request)
    {
        $nama = $request->nama;
        $ikanKecil = $request->ikanKecil;
        $ikanSedang = $request->ikanSedang;
        $ikanBesar = $request->ikanBesar;

        $hargaIkanKecil = 10000;
        $hargaIkanSedang = 35000;
        $hargaIkanBesar = 78000;

        $subTotalKecil = $ikanKecil * $hargaIkanKecil;
        $subTotalSedang = $ikanSedang * $hargaIkanSedang;
        $subTotalBesar = $ikanBesar * $hargaIkanBesar;

        $diskonKecil = $diskonSedang = $diskonBesar = 0;

        if ($ikanKecil >= 50) {
            $diskonKecil = 0.05 * $subTotalKecil;
        } elseif ($ikanKecil >= 100) {
            $diskonKecil = 0.10 * $subTotalKecil;
        }

        if ($ikanSedang >= 50) {
            $diskonSedang = 0.04 * $subTotalSedang;
        } elseif ($ikanSedang >= 100) {
            $diskonSedang = 0.08 * $subTotalSedang;
        }

        if ($ikanBesar >= 50) {
            $diskonBesar = 0.03 * $subTotalBesar;
        } elseif ($ikanBesar >= 100) {
            $diskonBesar = 0.06 * $subTotalBesar;
        }

        $totalHargaIkanKecil = $subTotalKecil - $diskonKecil;
        $totalHargaIkanSedang = $subTotalSedang - $diskonSedang;
        $totalHargaIkanBesar = $subTotalBesar - $diskonBesar;

        $totalBelanja = $totalHargaIkanKecil + $totalHargaIkanSedang + $totalHargaIkanBesar * 1;
        $pajak = 0.11 * $totalBelanja;
        $totalBayar = $totalBelanja + $pajak;

        echo "Nama : $nama";
        echo "<hr>";
        echo "Jumlah Ikan Kecil : $ikanKecil <br>";
        echo "Harga per 1 Kg : Rp. " . number_format($hargaIkanKecil, 0, ",", ".") . "<br>";
        echo "Subtotal Ikan Kecil : Rp. " . number_format($subTotalKecil, 0, ",", ".") . "<br>";
        echo "Potongan Harga Ikan Kecil : Rp. " . number_format($diskonKecil, 0, ",", ".") . "<br>";
        echo "Total Harga Belanja Ikan Kecil : Rp. " . number_format($totalHargaIkanKecil, 0, ",", ".");
        echo "<hr>";
        echo "Jumlah Ikan Sedang : $ikanSedang <br>";
        echo "Harga per 1 Kg : Rp. " . number_format($hargaIkanSedang, 0, ",", ".") . "<br>";
        echo "Subtotal Ikan Sedang : Rp. " . number_format($subTotalSedang, 0, ",", ".") . "<br>";
        echo "Potongan Harga Ikan Sedang : Rp. " . number_format($diskonSedang, 0, ",", ".") . "<br>";
        echo "Total Harga Belanja Ikan Sedang : Rp. " . number_format($totalHargaIkanSedang, 0, ",", ".");
        echo "<hr>";
        echo "Jumlah Ikan Besar : $ikanBesar <br>";
        echo "Harga per 1 Kg : Rp. " . number_format($hargaIkanBesar, 0, ",", ".") . "<br>";
        echo "Subtotal Ikan Besar : Rp. " . number_format($subTotalBesar, 0, ",", ".") . "<br>";
        echo "Potongan Harga Ikan Besar : Rp. " . number_format($diskonBesar, 0, ",", ".") . "<br>";
        echo "Total Harga Belanja Ikan Besar : Rp. " . number_format($totalHargaIkanBesar, 0, ",", ".");
        echo "<hr>";
        echo "Total Belanja Semua Ikan : Rp. " . number_format($totalBelanja, 0, ",", ".") . "<br>";
        echo "Pajak : Rp. " . number_format($pajak, 0, ",", ".") . "<br>";
        echo "<hr>";
        echo "Total Bayar : Rp. " . number_format($totalBayar, 0, ",", ".");
    }
}
