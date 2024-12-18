<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokController extends Controller
{
    public function tambah(Request $request)
    {
        // INSERT INTO nama_tabel VALUES
        DB::table('stok')->insert([
            'nama_barang'   => $request->nama,
            'harga_barang'  => $request->harga,
            'stok_barang'   => $request->stok,
            'created_at'    => now(),
        ]);
    }

    public function show()
    {
        // SELECT * FROM nama_table
        $datas = DB::table('stok')->get();
        return view('tables')->with('datas', $datas);
    }
}
