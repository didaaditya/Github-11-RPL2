<?php
$star = 10;
for($r = 1;$r <= $star;$r++){
    for ($j = 1;$j <= $r;$j++){
    echo " &nbsp";
}
for ($c = $star;$c >= $r;$c--){
    echo "*";
}
echo "<br>";
}
?>