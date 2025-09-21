<?php
$a = 10;
$b = 5;

$HasilTambah = $a + $b;
$HasilKurang = $a - $b;
$HasilKali = $a * $b;
$HasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;


echo "a : {$a}<br>";
echo "b : {$b}<br>";
echo "Hasil Tambah: {$HasilTambah} <br>";
echo "Hasil Kurang: {$HasilKurang} <br>";
echo "Hasil kali: {$HasilKali} <br>";
echo "Hasil Bagi: {$HasilBagi} <br>";
echo "Hasil Sisa Bagi: {$sisaBagi} <br>";
echo "Hasil Pangkat: {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a <$b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Hasil Sama: {$hasilSama} <br>";
echo "Hasil Tidak Sama: {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil sama: {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar sama: {$hasilLebihBesarSama} <br>";
?>