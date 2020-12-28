<?php
require "config.php";
echo session_save_path()."<br>";
print_r(session_status());
echo "<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "sessoes desabilitadas";
        break;
    
    case PHP_SESSION_NONE:
        echo "sessoes habilitadas, mas não inicializadas";
        break;

    case PHP_SESSION_ACTIVE:
        echo "sessoes hailitadas, e uma existe";
        break;
    
    default:
        # code...
        break;
}
?>