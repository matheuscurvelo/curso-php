<?php
    spl_autoload_register(function ($nameClass){
        $filename = $nameClass.'.php';
        
        if (file_exists('Classes'.DIRECTORY_SEPARATOR.$filename)) {
            require 'Classes'.DIRECTORY_SEPARATOR.$filename;
        }
        
    });
?>