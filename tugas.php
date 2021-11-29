<?php
if(isset($_POST['submit'])){
    $depart = $_POST['depart'];
    $return = $_POST['return'];

    $jt_dewasa = $_POST['jt_dewasa'];
    $jt_anak = $_POST['jt_anak'];
    $jt_bayi = $_POST['jt_bayi'];

    if ($depart == "jkt" )
    {
        if ($return == "sin" )
        {
            $dewasa = 300000 * $jt_dewasa;
            $anak = (300000 * 0.40) * $jt_anak;
            $bayi = (300000 * 0.25) * $jt_bayi;
            $total = $dewasa + $anak + $bayi;
        }

        elseif ($return == "kul" )
        {
            $dewasa = 250000 * $jt_dewasa;
            $anak = (250000 * 0.40) * $jt_anak;
            $bayi = (250000 * 0.25) * $jt_bayi;
            $total = $dewasa + $anak + $bayi;
        }
    }
    elseif ($depart == "srg" )
    {
        if ($return == "sin" )
        {
            $dewasa = 350000 * $jt_dewasa;
            $anak = (350000 * 0.40) * $jt_anak;
            $bayi = (350000 * 0.25) * $jt_bayi;
            $total = dewasa + $anak + $bayi;
        }
        elseif ($return == "kul" )
        {
            $dewasa = 300000 * $jt_dewasa;
            $anak = (300000 * 0.40) * $jt_anak;
            $bayi = (300000 * 0.25) * $jt_bayi;
            $total = $dewasa + $anak + $bayi;
        }
    }
    elseif ($depart == "plm" )
    {
        if ($return == "sin" )
        {
            $dewasa = 325000 * $jt_dewasa;
            $anak = (325000 * 0.40) * $jt_anak;
            $bayi = (325000 * 0.25) * $jt_bayi;
            $total = $dewasa + $anak + $bayi;
        }
        elseif ($return == "kul" )
        {
            $dewasa = 285000 * $jt_dewasa;
            $anak = (285000 * 0.40) * $jt_anak;
            $bayi = (285000 * 0.25) * $jt_bayi;
            $total = $dewasa + $anak + $bayi;
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body align="center">
    <form action="" method="POST">
        <table border="1" align="center">
        <td></td>
        <tr>
        <td><h1>pemesanan tiket online</h1></td>
        </tr>
        <tr>
        <td>Promo untuk keberangkatan 27 november 2021</td>
        </tr>
            <tr>
            <td>
               <label>DEPART :</label>
               <select name="depart" id="">
               <option value="">-PILIH-</option>
               <option value="jkt">JAKARTA (CKG)</option>
               <option value="srg">SEMARANG (SRG)</option>
               <option value="plm">PALEMBANG (PLM)</option>
           </select>
           </td>
           </tr>
           
            <tr>
            <td>
            <label>RETURN :</label>
            <select name="return" id="">
            <option value="">-PILIH-</option>
            <option value="sin">SINGAPORE (SIN)</option>
            <option value="kul">KUALA LUMPUR (KUL)</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>jumlah tiket :</label><br>
                    <input type="number" placeholder="pilih" name="jt_dewasa">Dewasa (+17)<br>
                    <input type="number" placeholder="pilih" name="jt_anak">anak (+2)<br>
                    <input type="number" placeholder="pilih" name="jt_bayi">bayi (0-2)<br>
               </td>
            </tr>
            <tr>
                <td>
            <label>MATA UANG :</label>
      <label><input type="radio" name="mata_uang" value="IDR"/>IDR</label>
            </td>
             </tr>
             <tr>
                 <td>
                <input type="submit"name="submit"value="simpan"/>        
             </td>
            </td>
            <tr>
                 <td>
                <input type="reset"name="reset"value="batal"/>        
             </td>
            </td>
            </table>
    </form>
</body>
</html>

<html>
    <center>
    <body align = "center">
        <br>
        <br>
        <table border="2">
            <tr>
                <th colspan="3">Struk permbayaran</th>
            </tr>
            <tr>
            <td>jumlah tiket</td>
            <td>:</td>
            <td>dewasa(+17) <?php echo $jt_dewasa?> tiket <br>
            anak(+2)<?php echo $jt_anak?> tiket <br>
            bayi(0-2)<?php echo $jt_bayi?> tiket </td>
         </tr>
         <tr>
             <td>jumlah yang harus di bayar</td>
             <td>:</td>
             <td><?php echo $total?></td>
         </tr>
        </table>
</center>
    </body>
</html>