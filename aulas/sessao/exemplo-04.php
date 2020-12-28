<?php
require "config.php";
session_regenerate_id();
echo session_id()."<p>";
print_r($_SESSION);
?>