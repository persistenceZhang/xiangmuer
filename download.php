<?php
include_once("functions/file_system.php");
$file_name = $_GET["file_name"];
download("uploads/","$file_name");
?>