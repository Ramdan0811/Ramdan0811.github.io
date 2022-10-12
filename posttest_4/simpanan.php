<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 4</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h2>Data Tambah</h2>
    <table border="1">
        <tr>
            <td>Jenis Betta Fish</td>
            <td>:</td>
            <td><?php echo $_POST["jb"] ?></td>
        </tr>
        <tr>
            <td>Harga Betta Fish</td>
            <td>:</td>
            <td><?php echo $_POST["hb"] ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $_POST["jk"] ?></td>
        </tr>
        <tr>
            <td>Stock Fish</td>
            <td>:</td>
            <td><?php echo $_POST["sf"] ?></td>
        </tr>
        <tr>
            <td>Keterangan Ikan</td>
            <td>:</td>
            <td><?php echo $_POST["ki"] ?></td>
        </tr>
    </table>
</body>
</html>