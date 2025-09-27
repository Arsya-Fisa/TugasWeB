<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $listDosen=["Elok Nur Hamdana","Unggul pamenang","Bagas Nugraha"];
            echo $listDosen[2]. "<br>";
            echo $listDosen[0]. "<br>";
            echo $listDosen[1]. "<br><br>";

            
            foreach($listDosen as $dosen){
                echo $dosen . "<br>";
            }
        ?>
    </body>
</html>