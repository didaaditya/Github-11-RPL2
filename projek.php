<?php
if(isset($_POST['submit'])){
    $bangun = $_POST['bangun'];
    if($bangun == "luas segitiga"){
        header("location:L_segitiga.php");
    }
    elseif($bangun == "keliling segitiga"){
        header("location:keli_segitiga.php");
    }
    elseif($bangun == "luas persegi"){
        header("location:L_persegi.php");
        }
        elseif($bangun == "luas persegi p"){
            header("location:L_persegi_p.php");
    }
    elseif($bangun == "lingkaran"){
        header("location:lingkaran.php");
    }
    elseif($bangun == "kel persegi p"){
        header("location:kel_p_panjang.php");
    }
    elseif($bangun == "belah ketupat"){
        header("location:b_ketupat.php");
    }
}




?>


<html>
    <head></head>
<body align="center">
    <form action="" method="POST">
        <table border="1" cellpading ="10" align="center" bgcolor="orange">
        <tr>
        <h2><td>&nbsp&nbsp&nbsp&nbspmencari rumus bangun datar&nbsp&nbsp</td></h2>
        </tr>
       
            <tr>
            <td>
            <label>bangun datar :<label>
            <select name="bangun" id="">
            <option value="">-Pilih-</option>
            <option value="luas segitiga">luas segitiga</option>
            <option value="keliling segitiga">keliling segitiga</option>
            <option value="lingkaran">lingkaran</option>
            <option value="luas persegi">persegi</option>
            <option value="luas persegi p">luas persegi panjang</option> 
            <option value="kel persegi p">keliling persegi panjang</option> 
            <option value="belah ketupat">belah ketupat</option>
            </tr>
            <tr>
                <td></td>
            <tr>
                 <td align ="center">
                <input type="submit"name="submit"value="cari"/>        
             </td>
            </td>
        </table>
        </form>
        </body>
    </html>