<?php
    require 'config.php';
    $obj = new Sql();
    
    //Select - Retorna um array
    //echo ($obj->select("SELECT * FROM tb_usuarios"));

    //Insert - Retorna o ID inserido
    /*$obj->insert("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (?,?)",[
        1=>'marcos',
        2=>'123'
    ]);*/

    //Update - Retorna o numero de linhas afetadas
    /*echo $obj->update("UPDATE tb_usuarios SET deslogin= ?, dessenha= ? WHERE idusuario= ?",[
        1=>'joao',
        2=>'456',
        3=>5
    ]);*/

    //Delete
    echo $obj->delete("DELETE FROM tb_usuarios WHERE idusuario= ?",[
        1=>6
    ]);
?>