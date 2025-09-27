<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            table {
                border-collapse: collapse;
                width: 350px;
                margin: 20px 0;
                font-family: Arial, sans-serif;
            }
            th, td {
                border: 1px solid #888;
                padding: 8px 12px;
                text-align: left;
            }
            th {
                background: #f2f2f2;
            }
            tr {
                background: #85de8eff;
            }
        </style>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili'=> 'Malang',
                'jenis_kelamin'=> 'Perempuan'
            ];
        ?>
        <table>
            <tr>
                <th>Nama</th>
                <td><?php echo $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <th>Domisili</th>
                <td><?php echo $Dosen['domisili']; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>
    </body>
</html>