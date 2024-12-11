<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main_pwl extends Controller
{
    public function logika1(Request $request)
    {
        echo $request->angka;
        echo "<br>";
        if ($request->angka % 2 == 0) {
            echo $request->angka . " adalah genap";
        } else {
            echo $request->angka . " adalah ganjil";
        }
    }

    public function logika2(Request $request)
    {
        echo $request->angka;
        echo "<br>";
        if ($request->angka > 30) {
            echo "Cuaca Panas";
        } else if ($request->angka >= 20 && $request->angka <= 30) {
            echo "Cuaca Hangat";
        } else {
            echo "Cuaca Dingin";
        }
    }
}
