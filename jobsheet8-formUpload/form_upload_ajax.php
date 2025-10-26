
<html>
<head>
<link rel="stylesheet" type="text/css" href="upload.css">
<title>Unggah File Gambar</title>
</head>
<body>

<div class="upload-form-container">
    <h2>Unggah File Gambar</h2>
>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">

        <div class="file-input-container">
            <input type="file" name="file[]" id="file" class="file-input" multiple accept="image/*">
            <label for="file" class="file-label">Pilih Gambar</label>
        </div>

        <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
        
        <div id="status" class="upload-status"></div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="upload.js"></script>

</body>
</html>
