<?php
if(isset($_POST['submit'])){
    $cari = $_POST['bangun'];
    $r = $_POST['rumus'];


}
?>



<html>
    <head></head>
<body align="center">
    <form action="" method="POST">
        <table border="1" cellpading ="10" align="center" bgcolor="orange">
        <tr>
        <td>&nbsp&nbsp&nbsp&nbspKalkulator sederhana&nbsp&nbsp</td>
        </tr>
       
            <tr>
            <td>
            <label>bangun datar :<label>
            <select name="bangun" id="">
            <option value="">-Pilih-</option>
            <option value="segitiga">segitiga</option>
            <option value="lingkaran">lingkaran</option>
            <option value="persegi">persegi</option>
            <option value="persegi p">persegi panjang</option>
            <option value="persegi">jajar genjang</option>
            </tr>
..
            <tr>
            <td>
            <label>luas dan keliling :<tabel>
            <select name="rumus" id="">
            <option value="">-Pilih-</option>
            <option value="segitiga">luas</option>
            <option value="lingkaran">keliling</option>
            </tr>
            <tr>
            <td>
                masukan angka : 
               <input type="text" name="bil2"><br>
           </td>
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