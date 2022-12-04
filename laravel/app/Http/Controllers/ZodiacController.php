<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiacController extends Controller
{

    public function index()
    {
        return view('zodiac');
    }

    public function zodiac(Request $request)
    {
        $bulan = $request->bulan;
        $tanggal = $request->tanggal;

        if ($bulan<1 || $bulan>12 || $tanggal<1 || $tanggal>31) {
            $hasil = 'Tanggal atau Bulan Salah' ;
        }else{
            if ($bulan==1 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Aquarius' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Capricorn' ;
                }
            }
            if ($bulan==2 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Pisces' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Aquarius' ;
                }
            }
            if ($bulan==3 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Aries' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Pisces' ;
                }
            }
            if ($bulan==4 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Taurus' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Aries' ;
                }
            }
            if ($bulan==5 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Gemini' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Taurus' ;
                }
            }
            if ($bulan==6 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Cancer' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Gemini' ;
                }
            }
            if ($bulan==7 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Leo' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Cancer' ;
                }
            }
            if ($bulan==8 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Virgo' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Leo' ;
                }
            }
            if ($bulan==9 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Libra' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Virgo' ;
                }
            }
            if ($bulan==10 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Scorpio' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Libra' ;
                }
            }
            if ($bulan==11 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Sagitarius' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Scorpio' ;
                }
            }
            if ($bulan==12 ) {
                if ($tanggal>19 && $tanggal<31) {
                    $hasil = 'Capricorn' ;
                }
                if ($tanggal>0 && $tanggal<20) {
                    $hasil = 'Sagitarius' ;
                }
            }
        }
        
        echo $tanggal . "<br>";
        echo $bulan . "<br>";

        return $hasil;
    }



}
