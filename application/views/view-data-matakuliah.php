<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mata Kuliah</title>
    <style>
        /* Styling for the table */
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        th {
        background-color: #4CAF50;
        color: white;
        height: 50px;
    }

    td, th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    td {
        font-weight: bold;
    }

    /* Styling for the link button */
    a {
        display: inline-block;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
    }

    a:hover {
        background-color: #3e8e41;
    }
</style>

</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3"> Tampil Data Mata Kuliah </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <td>:</td>
                <td> <?= $kode; ?> </td>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <td>:</td>
                <td> <?= $nama; ?> </td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td> <?= $sks; ?> </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>