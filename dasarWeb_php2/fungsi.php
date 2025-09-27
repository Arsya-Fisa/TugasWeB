<?php
    function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "senang berkenalan dengan anda <br/>";
    }

    perkenalan("Hamdana", "Hallo");
    echo "<hr/>";

    $saya = "Elok";
    $ucapanSalam = "Selamat pagi";

    perkenalan($saya,);

    echo "<br/>";
    echo "<hr/>";
    function hitungUmur($tahun_lahir, $tahun_sekarang) {
        $umur = $tahun_sekarang - $tahun_lahir;
        return $umur;
    }
    function perkenalkan($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo "Perkenalkan nama saya ".$nama."<br/>";
        echo "Saya berusia ".hitungUmur(2005, 2025)." tahun<br/>";
        echo "senang berkenalan dengan anda <br/>";
    }


    perkenalkan("Arsya");
?>