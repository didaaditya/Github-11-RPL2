<?php
if(isset($_POST['proses'])){
$d1 = $_POST['d1'];
$d2 = $_POST['d2'];

$hasil1 = 1/2 * $d1 * $d2;
}

if(isset($_POST['proses1'])){
    $sisi = $_POST['sisi'];
   

    $hasil2 = 4 * $sisi;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS BELAH KETUPAT</title>
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
        <h2>RUMUS LUAS BELAH KETUPAT</h2>
        <tr>
            <td>Pilih Rumus</td>
            <td>: LUAS</td>
        </tr>
        <tr>
            <td>Masukkan diagonal 1 </td>
            <td>: <input type="number" name="d1" placeholder="Masukkan diagonal 1..."></td>
        </tr>
        <tr>
            <td>Masukkan diagonal 2 </td>
            <td>: <input type="number" name="d2" placeholder="Masukkan diagonal 2..."></td>
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
        <h2>RUMUS LUAS BELAH KETUPAT</h2>
        <h3>Luas : 1/2 x Diagonal 1 x Diagonal 2</h3>
    </center>
        <hr width="900px"> 
    <center>
        <form action="" method="POST">
        <table>
        <h2>RUMUS KELILING BELAH KETUPAT</h2>
        <tr>
            <td>Pilih Rumus</td>
            <td>: KELILING</td>
        </tr>
        <tr>
            <td>Masukkan sisi </td>
            <td>: <input type="number" name="sisi" placeholder="Masukkan sisi..."></td>
        </tr>
      
        <tr>
            <td></td>
             <td>&nbsp;&nbsp;<input type="submit" value="Proses" name="proses1"></td>
        </tr>
    </table>
</form>
        <h2>Hasil</h2>
        <hr width="200px">
        <h2>KELILING : <?php echo $hasil2 ?></h2>
        <hr width="500px">
        <h2>RUMUS KELILING BELAH KETUPAT</h2>
        <h3>Keliling : 4 x SISI</h3>
    </center>
</body>
</html>