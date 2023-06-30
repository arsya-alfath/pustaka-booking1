<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/stylesiswa.css">
    <title>Document</title>
</head>
<body>
<h2>Form Input Data Siswa</h2>

<form method="post" action="<?php echo base_url('siswa/proses_input'); ?>">
    <div>
        <label>Nama Siswa</label>
        <input type="text" name="nama_siswa" required>
    </div>
    <div>
        <label>NIS</label>
        <input type="text" name="nis" required>
    </div>
    <div>
        <label>Kelas</label>
        <input type="text" name="kelas" required>
    </div>
    <div>
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" required>
    </div>
    <div>
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" required>
    </div>
    <div>
        <label>Alamat</label>
        <textarea name="alamat" rows="4" cols="30" required></textarea>
    </div>
    <div>
        <label>Jenis Kelamin</label>
        <div>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
        </div>
    </div>
    <div>
        <label>Agama</label>
        <select name="agama" required>
            <option value="">-- Pilih Agama --</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Buddha">Buddha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Konghucu">Konghucu</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>

</body>
</html>