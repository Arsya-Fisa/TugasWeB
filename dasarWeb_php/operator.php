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

$a = 10;
$b = 5;
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

$a = 10;
$b = 5;
$hasilAnd = $a && $b;
$hasilOr  = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "Hasil And: {$hasilAnd} <br>";
echo "Hasil Or: {$hasilOr} <br>";
echo "Hasil NotA: {$hasilNotA} <br>";
echo "Hasil NotB: {$hasilNotB} <br>";

$a = 10;
$b = 5;
$a += $b;
echo "<br>";
echo "a += b → {$a}<br>";
$a -= $b;
echo "a -= b → {$a}<br>";
$a *= $b;
echo "a *= b → {$a}<br>";
$a /= $b;
echo "a /= b → {$a}<br>";
$a %= $b;
echo "a %= b → {$a}<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Hasil Identik: {$hasilIdentik} <br>";
echo "Hasil Tidak Identik: {$hasilTidakIdentik} <br>";


?>