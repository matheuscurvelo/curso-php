<?php
$a = 10;
function troca_valor(&$a){
    $a += 50;
    return $a;
}

echo $a."<br>";
echo troca_valor($a)."<br>";
echo $a."<br>";
?>