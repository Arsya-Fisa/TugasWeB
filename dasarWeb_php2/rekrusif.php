<?php
    function tampilkanAngka(int $jumlah, int $indexs = 1) {
        echo "perulangan ke-{$indexs}<br/>";

        if($indexs < $jumlah) {
            tampilkanAngka($jumlah, $indexs + 1);
        }
    }
        tampilkanAngka(20);
?>