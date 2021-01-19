<?php
    require 'config.php';
    $obj = new Sql();
    //echo ($obj->select("SELECT * FROM tb_usuarios"));
    $obj->insert("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (?,?)",[
        1=>'marcos',
        2=>'123']
    );
    
?>