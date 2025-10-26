<?php
// search.php (VULNERABLE)
// WARNING: hanya untuk pengujian lokal sendiri!
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Hasil Pencarian (Vulnerable)</title>
</head>
<body>
  <h2>Hasil Pencarian (Vulnerable)</h2>

  <?php
    // ambil input dari POST (tidak disanitasi)
    $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';

    // simulate hasil (langsung menaruh input ke HTML)
    echo '<div>Hasil pencarian untuk "' . $keyword . '":</div>';
  ?>

  <p><a href="index.html">Kembali</a></p>
</body>
</html>
