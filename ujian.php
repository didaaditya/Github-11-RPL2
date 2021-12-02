<?php
if(isset($_POST['submit'])){
    $status = $_POST['status'];
    $nama = $_POST['nama']; 

    if($status == "sudah valksin"){
        echo "diizinkan ";
    }
    elseif($status == "belum vaksin"){
        echo "tidak di izinkan";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 1</title>
</head>
<body>
<form action="" method="POST">
        <table border="" align="center" bgcolor="orange">
            <center>
            <tr>
                <td><h1>syarat masuk ke MIKO MALL</h1></td>
           </tr>
           <tr>
                <td>
                    <label>MASUKAN NAMA :</label>
                    <input type="name" placeholder="tolong masukan nama..." name="nama">
           <tr>
            <td>
            <label>STATUS VAKSIN :</label>
            <select name="status" id="">
            <option value="">- status vaksin -</option>
            <option value="sudah di vaksin" name="sdh">sudah di vaksin</option>
            <option value="belum di vaksin" name="blm">belum di vaksin</option>
                </select>
                </td>
           </tr>
                  <tr>
                 <td>
                <input type="submit"name="submit"value="kirim"/>        
             </td>
</center>
</table>
</form>    
</body>
</html>


<html>
    <center>
    <body align = "center">
        <br>
        <br>
            <tr>
            <td>nama anda :<?php echo $nama ?><br>
         </tr>
         <tr>
             <td>status vaksin</td>
             <td>:</td>
             <td><?php echo $status?></td>
         </tr>
        </table>
    </center>
    </body>
    </html>