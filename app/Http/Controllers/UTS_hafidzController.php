<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UTS_hafidzController extends Controller
{
    public function pesanTiket(Request $request)
    {
        $ktp = $request->ktp;
        $tanggal_berangkat = $request->tanggal_berangkat;
        $email = $request->email;
        $tujuan = $request->tujuan;
        $jumlah_tiket = $request->jumlah_tiket;

        $destinasi = [
            'Lampung' => 300000,
            'Medan' => 250000,
            'Jambi' => 150000,
            'Padang' => 500000,
            'Aceh' => 750000
        ];

        $harga_tiket = $destinasi[$tujuan] ?? 0;
        $bayar_tiket = $harga_tiket * $jumlah_tiket;
        $diskon = 0;
        if ($jumlah_tiket >= 4) {
            $diskon = ($jumlah_tiket > 4) ? 0.1 : 0.05;
        }
        $total_bayar = $bayar_tiket - ($bayar_tiket * $diskon);

        echo  "Hafidz Ibnu Ibrahim Ritonga \n";
        echo "KTP: " . $ktp . "\n";
        echo "Tanggal Berangkat: " . date('d F Y', strtotime($tanggal_berangkat)) . "\n";
        echo "Email: " . $email . "\n";
        echo "Tujuan: " . $tujuan . "\n";
        echo "Jumlah Tiket: " . $jumlah_tiket . "\n";
        echo "Harga Tiket: Rp" . number_format($harga_tiket, 0, ',', '.') . "\n";
        echo "Total Bayar sebelum diskon: Rp" . number_format($bayar_tiket, 0, ',', '.') . "\n";
        echo "Diskon: " . ($diskon * 100) . "% == Rp" . number_format(($bayar_tiket * $diskon), 0, ',', '.') . "\n";
        echo "Total Bayar sesudah diskon: Rp" . number_format($total_bayar, 0, ',', '.') . "\n";
    }
}
