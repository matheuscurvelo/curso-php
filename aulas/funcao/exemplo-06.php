<?php
//declaracao de tipos escalares
function soma(int...$valores){
    return array_sum($valores);
}

echo soma(10,20,30,40)."<br>";
?>