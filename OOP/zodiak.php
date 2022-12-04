<?php 

    class Zodiac{
        public static function zodiak($b, $t){
            if ($b<1 || $b>12 || $t<1 || $t>31) {
                $hasil = 'Tanggal atau Bulan Salah' ;
            }else{
                if ($b==1 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Aquarius' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Capricorn' ;
                    }
                }
                if ($b==2 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Pisces' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Aquarius' ;
                    }
                }
                if ($b==3 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Aries' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Pisces' ;
                    }
                }
                if ($b==4 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Taurus' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Aries' ;
                    }
                }
                if ($b==5 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Gemini' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Taurus' ;
                    }
                }
                if ($b==6 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Cancer' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Gemini' ;
                    }
                }
                if ($b==7 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Leo' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Cancer' ;
                    }
                }
                if ($b==8 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Virgo' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Leo' ;
                    }
                }
                if ($b==9 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Libra' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Virgo' ;
                    }
                }
                if ($b==10 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Scorpio' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Libra' ;
                    }
                }
                if ($b==11 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Sagitarius' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Scorpio' ;
                    }
                }
                if ($b==12 ) {
                    if ($t>19 && $t<31) {
                        $hasil = 'Capricorn' ;
                    }
                    if ($t>0 && $t<20) {
                        $hasil = 'Sagitarius' ;
                    }
                }
            }
            return $hasil ;
        }

    }

?>