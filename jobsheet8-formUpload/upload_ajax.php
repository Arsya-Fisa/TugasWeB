<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $totalFiles = count($_FILES['file']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_type = $_FILES['file']['type'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowedExtensions)) {
            $errors[] = "File $file_name tidak valid. Hanya JPG, JPEG, PNG, dan GIF yang diperbolehkan.<br>";
            continue;
        }

        if ($file_size > 2 * 1024 * 1024) {
            $errors[] = "Ukuran file $file_name melebihi 2 MB.<br>";
            continue;
        }

        if (move_uploaded_file($file_tmp, "uploads/" . $file_name)) {
            echo "File <b>$file_name</b> berhasil diunggah.<br>";
            echo "<img src='uploads/$file_name' width='150' style='height:auto; margin:5px; border:1px solid #ccc;'><br>";
        } else {
            $errors[] = "Gagal mengunggah file $file_name.<br>";
        }
    }

    if (!empty($errors)) {
        echo "<b>Daftar Error:</b><br>" . implode("", $errors);
    }
}
?>
