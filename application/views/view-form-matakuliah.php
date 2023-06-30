<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-color: #f0f0f0;
    }
    
    form {
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 400px;
        margin: 0 auto;
    }
    
    h1 {
        text-align: center;
    }
    
    input[type="text"], select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    
    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #3e8e41;
    }
    
    .error {
        color: red;
    }

    p {
            color: red ;
    }
    </style>
</head>

<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="Post">
            <table>
                <tr>
                    <p>
                        <?php echo validation_errors(); ?>
                    </p>
                    <th colspan="3"> Form Input Data Mata Kuliah </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td> <input type="text" name="kode" id="kode" placeholder="Masukkan Kode"> </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td> <input type="text" name="nama" id="nama" placeholder="Masukkan Nama MTK"> </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center"> <input type="submit" value="Submit"> </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>