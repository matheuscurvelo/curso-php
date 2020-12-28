<?php
function ola(){
    return func_get_args();
}

print_r(ola("bom dia",1,12.90));
?>