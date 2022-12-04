<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuhuController extends Controller
{
    public function index()
    {
        return view('suhu');
    }

    public function suhu(Request $request)
    {
        $suhu = $request->suhu;
        $sebelum = $request->sebelum;
        $sesudah = $request->sesudah;
        
        if($sebelum == 'C') {
            if ($sesudah == 'C') {
                $hasil = $suhu . '°C';
            }
            if ($sesudah == 'F') {
                $hasil = (9/5) * $suhu + 32 . '°F';
            }
            if ($sesudah == 'K') {
                $hasil = $suhu + 273 . '°K';
            }
            if ($sesudah == 'R') {
                $hasil = (4/5) * $suhu . '°R';
            }
        }

        if($sebelum == 'F') {
            if ($sesudah == 'C') {
                $hasil = ($suhu - 32) * (5/9) . '°C';
            }
            if ($sesudah == 'F') {
                $hasil = $suhu . '°F';
            }
            if ($sesudah == 'K') {
                $hasil = ($suhu - 32) * (5/9) +273.15 . '°K';
            }
            if ($sesudah == 'R') {
                $hasil = (4/9) ($suhu - 32) . '°R';
            }
        }

        if($sebelum == 'K') {
            if ($sesudah == 'C') {
                $hasil = ($suhu - 32) * (5/9) . '°R';
            }
            if ($sesudah == 'F') {
                $hasil = $suhu . '°F';
            }
            if ($sesudah == 'K') {
                $hasil = $suhu . '°K';
            }
            if ($sesudah == 'R') {
                $hasil = (4/9) ($suhu - 32) . '°R';
            }
        
        }
        if($sebelum == 'R') {
            if ($sesudah == 'C') {
                $hasil = (5/4) * $suhu . '°C';
            }
            if ($sesudah == 'F') {
                $hasil = $suhu . (9/4) + 32 . '°F';
            }
            if ($sesudah == 'K') {
                $hasil = $suhu * (5/4) + 273.15 . '°K';
            }
            if ($sesudah == 'R') {
                $hasil = $suhu . '°R';
            }
        }

        echo "<h1>". $hasil ."</h1>";

    }


}
