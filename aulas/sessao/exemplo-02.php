<?php
require "config.php";

//limpa variaveis de sessao
session_unset($_SESSION["nome"]);
session_unset($_SESSION);

echo $_SESSION["nome"];

//destroi todas as variaveis e remoe o usuario
session_destroy();
?>