<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table border="1px solid black">
        <tr>
            <th>NAMA MAHASISWA</th>
            <th>NIM</th>
            <th>ALAMAT</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo $mhs['nama']; ?></td>
                <td><?php echo $mhs['nim']; ?></td>
                <td><?php echo $mhs['alamat']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>