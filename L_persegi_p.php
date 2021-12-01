<?php
if(isset($_POST['proses'])){
$P = $_POST['panjang'];
$L = $_POST['lebar'];


$hasil1 =$P * $L;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS LUAS PERSEGI PANJANG</title>
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
        <h2>RUMUS LUAS PERSEGI PANJANG</h2>
        <tr>
            <td>Pilih rumus</td>
            <td>: LUAS</td>
        </tr>
        <tr>
            <td>Masukkan panjang </td>
            <td>: <input type="number" name="panjang" placeholder="Masukkan panjang..."></td>
        </tr>
        <tr>
            <td>Masukkanlebar </td>
            <td>: <input type="number" name="lebar" placeholder="Masukkan lebar..."></td>

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
        <h2>Rumus Luas persegi panjang</h2>
        <h3>Luas : P x L</h3>
    </center>
</body>
</html> 