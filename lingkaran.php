<?php
if(isset($_POST['proses'])){
$jari_jari = $_POST['jari_jari'];
$hasil1 = 3.14 * ($jari_jari * $jari_jari);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS LUAS LINGKARAN</title>
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
        <h2>RUMUS LUAS LINGKARAN</h2>
        
            <td>Masukkan jari-jari :</td>
            <td><input type="number" name="jari_jari" placeholder="Masukkan jari-jari..."></td>
            <td><input type="submit" value="Proses" name="proses"></td>
        </tr>
    </table>
</form>
        <h2>Hasil</h2>
        <hr width="200px">
        <h2>LUAS : <?php echo $hasil1 ?></h2>
        <hr width="500px">
        <h2>Rumus Luas Lingkaran</h2>
        <h3>Luas : 3.14 * (jari-jari * jari-jari)</h3>
    </center>
</body>
</html>



<?php
if(isset($_POST['proses'])){
$diameter = $_POST['diameter'];
$hasil1 = 3.14 * $diameter;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS KELILING LINGKARAN</title>
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
        <h2>RUMUS KELILING LINGKARAN</h2>
        
            <td>Masukkan diameter :</td>
            <td><input type="number" name="diameter" placeholder="Masukkan diameter..."></td>
            <td><input type="submit" value="Proses" name="proses"></td>
        </tr>
    </table>
</form>
        <h2>Hasil</h2>
        <hr width="200px">
        <h2>LINGKARAN : <?php echo $hasil1 ?></h2>
        <hr width="500px">
        <h2>Rumus Keliling Lingkaran</h2>
        <h3>Keliling : 3.14 x diameter</h3>
    </center>
</body>
</html>`    