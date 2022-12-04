<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator');
    }

    public function kalkulator(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $operasi = $request->operasi;

        
            switch ($operasi) {
                case 'tambah':
                    $hasil = $angka1 + $angka2;
                    echo $angka1. '+' .$angka2.' = '.$hasil;
                    break;
                case 'kurang':
                    $hasil = $angka1 - $angka2;
                    echo $angka1. ' - ' .$angka2.' = '.$hasil;
                    break;
                case 'kali':
                    $hasil = $angka1 * $angka2;
                    echo $angka1. ' x ' .$angka2.' = '.$hasil;
                    break;
                case 'bagi':
                    $hasil = $angka1 / $angka2;
                    echo $angka1. ' : ' .$angka2.' = '.$hasil;
                    break;
                
                default:
                    echo "Masukkan Angka";
                    break;
            }
            
    }


}
