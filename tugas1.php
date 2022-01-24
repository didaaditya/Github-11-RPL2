<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liburan</title>
    <link rel="stylesheet" href="tugas1.css">
</head>
<body>
    <h1 align="center">Selamat datang</h1>
    <center><p><h2>List Tempat</h2></p>
    <table cellspacing="15">
        <th>No</th> 
       <th>Tempat</th>
       <th>harga</th>
    
    <tr>
        <td>1.</td>
        <td>bukit bintang</td>
        <td>Rp.10.000</td>
    </tr>
    <tr>
        <td>2.</td>
        <td> Pantai sadranan</td>
        <td>Rp.15.000</td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Candi borobudur</td>
        <td>Rp.50.000</td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Candi prambanan</td>
        <td>Rp.50.000</td>
    </tr>
    <tr>
        <td>5.</td>
        <td>keraton yogyakarta</td>
        <td>Rp.5.000</td>
    </tr>
    <tr>
        <td>6.</td>
        <td>malioboro</td>
        <td>Rp.5.000</td>
    </tr>
    <tr>
        <td>7.</td>
        <td>cafe</td>
        <td>-</td>
    </tr>
    <tr>
        <td>8.</td>
        <td>goa pindul</td>
        <td>Rp.100.000</td>
    </tr>
    </table>
    <tr></tr>
    <form action="" method="post">
    <input type="number"name="OK">
    <button name="Submit">OK</button>
</form>
<?php
if(isset($_POST['Submit'])){
    $pilih = $_POST['OK'];

    if($pilih == 1){
        echo "Bukit Bintang";
        echo "<br>";
        echo "Tiket = Rp.10.000<br>";
        echo '<input type= "number" placeholder ="Tiket Yang Mau Dibeli"><br><br>';
        echo '';
        echo '<input type= "number" placeholder ="Bayar"><br><br>';
        echo '';
        echo '<button name="Submit">Bayar</button>';
    }elseif($pilih==2){
        echo"Pantai sadranan";
        echo "<br>";
        echo "Tiket = Rp.15.000<br>";
        echo '<input type= "number" placeholder ="Tiket Yang Mau Dibeli"><br><br>';
        echo '';
        echo '<input type= "number" placeholder ="Bayar"><br><br>';
        echo '';
        echo '<button name="Submit">Bayar</button>';
    }
    elseif($pilih==3){
        echo"Candi borobudur";
        echo "<br>";
        echo "Tiket = Rp.50.000<br>";
        echo '<input type= "number" placeholder ="Tiket Yang Mau Dibeli"><br><br>';
        echo '';
        echo '<input type= "number" placeholder ="Bayar"><br><br>';
        echo '';
        echo '<button name="Submit">Bayar</button>';
    }
    elseif($pilih==4){
        echo"candi prambanan";
        echo "<br>";
        echo "Tiket = Rp.50.000<br>";
        echo '<input type= "number" placeholder ="Tiket Yang Mau Dibeli"><br><br>';
        echo '';
        echo '<input type= "number" placeholder ="Bayar"><br><br>';
        echo '';
        echo '<button name="Submit">Bayar</button>';
    }
    elseif($pilih==5){
        echo"Keraton yogyakarta";
        echo "<br>";
        echo "Tiket = Rp.5.000<br>";
        echo '<input type= "number" placeholder ="Tiket Yang Mau Dibeli"><br><br>';
        echo '';
        echo '<input type= "number" placeholder ="Bayar"><br><br>';
        echo '';
        echo '<button name="Submit">Bayar</button>';
    }
    elseif($pilih==6){
        echo"malioboro";
        echo "<br>";
        echo "Tiket = Rp.5.000<br>";
        echo '<input type= "number" placeholder ="Tiket Yang Mau Dibeli"><br><br>';
        echo '';
        echo '<input type= "number" placeholder ="Bayar"><br><br>';
        echo '';
        echo '<button name="Submit">Bayar</button>';
    }
    elseif($pilih==7){
        echo"cafe";
        echo "<br>";
        if ($pilih == 7) {
            echo '<table cellspacing ="15" align ="center">
            <tr>
            <th></th>
            <th>MENU</th>
            <th>HARGA</th>
            </tr>
            <tr>
            <td></td>
            <td>1.KOPI</td>
            <td>70000</td>
            <th></th>
            <td>2.roti bakar</td>
            <td>15000</td>
            </table>';
            
        }
    }
    elseif($pilih==8){
        echo"Goa pindul";
        echo "<br>";
        echo "Tiket = Rp.100.000<br>";
        echo '<input type= "number" placeholder ="Tiket Yang Mau Dibeli"><br><br>';
        echo '';
        echo '<input type= "number" placeholder ="Bayar"><br><br>';
        echo '';
        echo '<button name="Submit">Bayar</button>';
    }
    else{
        echo"MAAF LIST TIDAK TERSEDIA";
    }

}
?>
</body>
</html>