<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 3</title>
</head>
<body>
    <center>
    <form action="" method="POST">
                <h1>FORM PENGULANGAN </h1>
                    <select name="pilih" id="" style="font-size: 30px; border-radius: 5px;">
                        <option value="ganjil">deret bilangan ganjil</option>
                        <option value="bintang">segitiga sama kaki terbalik</option>
                        <option value="kelipatan">kelipatan 3</option>
                    </select>
                <h1>MASUKKAN ANGKA &nbsp; </h1>
                    <input type="text" name="nilai" placeholder="Masukkan angka..." style="font-size: 25px; margin-top: -200px;">
                    <input type="submit" value="kirim" name="proses" style="font-size: 25px;">
                    <hr style="width: 500px; margin-top: 20px;">
    </form>
    <h1>DERETAN HASIL</h1>
    <hr style="width: 12rem; margin-bottom: 1.5rem;">
</center>
</body>
</html>
<?php
if(isset($_POST['proses'])){
    $pilih = $_POST['pilih'];
    $nilai = $_POST['nilai'];

       echo "<center>";
    if($pilih == "ganjil"){
        for($i = 1; $i <= $nilai; $i+=2){
                echo "$i &nbsp";
        }
    }
    elseif($pilih == "bintang"){
        for($i = 1; $i <= $nilai; $i++){
            for($j = 1; $j <= $nilai; $j++){
                echo "&nbsp";
            }
            for($k = $nilai; $k >= $i; $k--){
                echo " *";
            }
            echo "<br>";
        }
    }
    elseif($pilih == "kelipatan"){
        for($i = 3; $i <= $nilai; $i+=3){
                echo " $i &nbsp";
        }
    }
}
echo "</center>"
?>