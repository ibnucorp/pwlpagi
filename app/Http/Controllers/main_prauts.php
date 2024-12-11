<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main_prauts extends Controller
{
    public function pra_uts(Request $request)
    {
        if ($request->jumlahikankecil > 0) {
            $hargaik          = 10000 * $request->jumlahikankecil;
            if ($request->jumlahikankecil > 100) {
                $diskon = 0.1;
            } else if ($request->jumlahikankecil > 50) {
                $diskon = 0.05;
            } else {
                $diskon = 0;
            }
            $potonganik       = $hargaik * $diskon;
            $hargabelanjaik   = $hargaik - $potonganik;
        } else {
            $hargaik          = 0;
            $potonganik       = 0;
            $hargabelanjaik   = 0;
        }

        if ($request->jumlahikansedang > 0) {
            $hargais          = 35000 * $request->jumlahikansedang;
            if ($request->jumlahikansedang > 100) {
                $diskon = 0.08;
            } else if ($request->jumlahikansedang > 50) {
                $diskon = 0.04;
            } else {
                $diskon = 0;
            }
            $potonganis       = $hargais * $diskon;
            $hargabelanjais   = $hargais - $potonganis;
        } else {
            $hargais          = 0;
            $potonganis       = 0;
            $hargabelanjais   = 0;
        }

        if ($request->jumlahikanbesar > 0) {
            $hargaib          = 78000 * $request->jumlahikanbesar;
            if ($request->jumlahikanbesar > 100) {
                $diskon = 0.06;
            } else if ($request->jumlahikanbesar > 50) {
                $diskon = 0.03;
            } else {
                $diskon = 0;
            }
            $potonganib       = $hargaib * $diskon;
            $hargabelanjaib   = $hargaib - $potonganib;
        } else {
            $hargaib          = 0;
            $potonganib       = 0;
            $hargabelanjaib   = 0;
        }

        echo $request->nama;
        echo "<hr>";
        echo $hargaik;
        echo $potonganik;
        echo $hargabelanjaik;
        echo "<hr>";
        echo $hargais;
        echo $potonganis;
        echo $hargabelanjais;
        echo "<hr>";
        echo $hargaib;
        echo $potonganib;
        echo $hargabelanjaib;
        echo "<hr>";
        echo $total_belanja = $hargabelanjaik + $hargabelanjais + $hargabelanjaib;
        echo $pajak = $total_belanja * 0.11;
        echo "<hr>";
        echo $total_belanja + $pajak;
    }
}
