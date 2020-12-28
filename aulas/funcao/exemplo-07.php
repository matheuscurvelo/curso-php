<?php
function soma(int...$valores): string{
    return array_sum($valores);
}

var_dump(soma(10,20,30,40));
?>