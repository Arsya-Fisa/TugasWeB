<?php
    $nilaiNumerik = 92;
    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai Huruf: A";
    } elseif ($nilaiNumerik>= 80 && $nilaiNumerik <90) {
        echo "Nilai Huruf: B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik <80) {
        echo "Nilai Huruf: C";
    } elseif ($nilaiNumerik <70) {
        echo "Nilai Huruf: D";
    }
    echo"<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$PeningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $PeningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilomter";

echo"<br>";
$jumlahLahan = 10;
$tanamanaPerlahan = 5;
$buahPertanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <$jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanaPerlahan * $buahPertanaman);
}
echo "Jumlah Buah yang akan dipanen adalah: $jumlahBuah";

  echo"<br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";

 echo"<br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}

$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai);
$sisaNilai = [];
for ($i = 2; $i < count($nilai) - 2; $i++) {
    $sisaNilai[] = $nilai[$i];
}
$total = 0;
for($i = 0; $i < count($sisaNilai); $i++) {
    $total += $sisaNilai[$i];
}
$rataNilai = $total / count($sisaNilai);
echo "Daftar nilai: ";
foreach ($sisaNilai as $n) {
    echo $n . " ";
}

 echo"<br>";
echo "Total nilai: {$total}<br>";
echo "Rata-rata: {$rataNilai}<br>";
?>