<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest4</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h3><i><b>Tambah Data Betta Fish</b></i></h3>
    <form action="simpanan.php" method="POST">
        <table>
            <tr>
                <td>Jenis Betta Fish</td>
                <td><input type="text" name="jb"></td>
            </tr>
            <tr>
                <td>Harga Betta Fish</td>
                <td><input type="number" name="hb"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk">Jantan
                    <input type="radio" name="jk">Betina</td>
            </tr>
            <tr>
                <td>Stock Fish</td>
                <td><input type="radio" name="sf">Ready
                    <input type="radio" name="sf">Kosong
                </td>
            </tr>
            <tr>
                <td>Keterangan Ikan</td>
                <td><textarea name="ki" id="" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="kirim"></td>
            </tr>
            <tr>
                <td><a href="index.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>