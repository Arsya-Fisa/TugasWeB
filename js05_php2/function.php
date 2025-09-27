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
?>