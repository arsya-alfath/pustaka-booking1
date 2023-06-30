<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Hasil Input Data Siswa</h2>

    <table border="1">
        <tr>
            <th>Nama Siswa</th>
            <th>NIS </th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
        </tr>
        <?php
        $count = 0;
        foreach ($queryAll as $row) {
            $count = $count + 1;
        ?>
            <tr align="center">
                <td><?= $row->nama_siswa; ?></td>
                <td><?= $row->nis; ?></td>
                <td><?= $row->kelas; ?></td>
                <td><?= $row->tanggal_lahir; ?></td>
                <td><?= $row->tempat_lahir; ?></td>
                <td><?= $row->alamat; ?></td>
                <td><?= $row->jenis_kelamin; ?></td>
                <td><?= $row->agama; ?></td>
            </tr>
        <?php } ?>
    </table>

    <a href="<?php echo base_url('siswa'); ?>">Kembali ke Form Input Data Siswa</a>

</body>

</html>