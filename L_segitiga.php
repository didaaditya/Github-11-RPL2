<?php
if(isset($_POST['proses'])){
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];


$hasil1 = 1/2 * $alas * $tinggi;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS LUAS SEGITIGA</title>
    <style>
        h3{
            margin-top: -20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body style="margin-top: 200px;">
    <center>
        <form action="" method="POST">
        <table>
        <h2>RUMUS LUAS SEGITIGA</h2>
        <tr>
            <td>Pilih rumus</td>
            <td>: LUAS</td>
        </tr>
        <tr>
            <td>Masukkan alas </td>
            <td>: <input type="number" name="alas" placeholder="Masukkan alas..."></td>
        </tr>
        <tr>
            <td>Masukkan tinggi </td>
            <td>: <input type="number" name="tinggi" placeholder="Masukkan tinggi..."></td>

        </tr>
        <tr>
            <td></td>
             <td>&nbsp;&nbsp;<input type="submit" value="Proses" name="proses"></td>
        </tr>
    </table>
</form>
        <h2>Hasil</h2>
        <hr width="200px">
        <h2>LUAS : <?php echo $hasil1 ?></h2>
        <hr width="500px">
        <h2>Rumus Luas Segitiga</h2>
        <h3>Luas : 1/2 x alas x tinggi</h3>
    </center>
</body>
</html> 