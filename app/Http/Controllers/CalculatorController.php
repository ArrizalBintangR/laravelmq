<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function OperasiKabataku(Request $request){
        $operan = $request -> input('operan');
        $bilpertama = $request -> input('pertama');
        $bilkedua = $request -> input('kedua');
        $hasil = 0;

        switch ($operan) {
            case "tambah":
              $hasil = $bilpertama + $bilkedua;
              break;
            case "kurang":
              $hasil = $bilpertama - $bilkedua;
              break;
            case "kali":
              $hasil = $bilpertama * $bilkedua;
              break;
            case "bagi":
            $hasil = $bilpertama / $bilkedua;
            break;
            default:
              $hasil = 69;
          }
        return redirect('/calculator')->with('info','hasilnya adalah:' . $hasil);
        // return view('calculator');

    }
}
