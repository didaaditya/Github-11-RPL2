<?php
if(isset($_POST['proses'])){
$sisi = $_POST['sisi'];
$sisi = $_POST['sisi'];


$hasil1 =$sisi * $sisi;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS LUAS PERSEGI </title>
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
        <h2>RUMUS LUAS PERSEGI</h2>
        <tr>
            <td>Pilih rumus</td>
            <td>: LUAS</td>
        </tr>
        <tr>
            <td>Masukkan sisi </td>
            <td>: <input type="number" name="sisi" placeholder="Masukkan sisi..."></td>
        </tr>
        <tr>
            <td>Masukkan sisi </td>
            <td>: <input type="number" name="sisi" placeholder="Masukkan sisi..."></td>

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
        <h2>Rumus Luas persegi</h2>
        <h3>Luas : sisi x sisi</h3>
    </center>
</body>
</html> 

<?php
if(isset($_POST['proses'])){
$sisi = $_POST['sisi'];
$sisi = $_POST['sisi'];


$hasil1 = 4 * $sisi;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS LUAS PERSEGI </title>
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
        <h2>RUMUS LUAS dan KELILING PERSEGI</h2>
        <tr>
            <td>Pilih rumus</td>
            <td>: KELILING</td>
        </tr>
        <tr>
            <td>Masukkan sisi </td>
            <td>: <input type="number" name="sisi" placeholder="Masukkan sisi..."></td>
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
        <h2>Rumus keliling persegi</h2>
        <h3>Luas : 4 x sisi</h3>
    </center>
</body>
</html> 