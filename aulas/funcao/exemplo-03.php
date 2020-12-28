<?php
function ola($texto, $periodo="bom dia"){
    return "Olá $texto! $periodo! <br>";
}

echo ola("Mundo");
echo ola("","boa noite");
echo ola("Matheus","Boa tarde");
echo ola("João","");

?>