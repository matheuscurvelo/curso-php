<?php
    require 'config.php';
    $obj = new Sql();
    echo json_encode($obj->select("SELECT * FROM status_servico"));
    echo $obj->insert("INSERT INTO status_servico(tipo,descricao,desc_alt) VALUES (?,?,?)",array(
        '1'=>'E',
        '2'=>'teste',
        '3'=>'testando')
    );
    
?>