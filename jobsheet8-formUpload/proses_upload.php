<?php
$targetDirectory = "uploads/"; // Folder tujuan upload

// Buat folder jika belum ada
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Pastikan ada file yang diunggah
if (isset($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = array("jpg", "jpeg", "png", "gif"); // Hanya gambar

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . basename($fileName);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Validasi ekstensi file
        if (in_array($fileType, $allowedExtensions)) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File <b>$fileName</b> berhasil diunggah.<br>";
                echo "<img src='$targetFile' width='150' style='height:auto; margin:5px; border:1px solid #ccc;'><br>";
            } else {
                echo "Gagal mengunggah file <b>$fileName</b>.<br>";
            }
        } else {
            echo "File <b>$fileName</b> tidak valid (bukan gambar).<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
