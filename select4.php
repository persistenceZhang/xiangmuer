<?php
include_once("functions/database.php");
$top_id=$_GET["top_id"];
get_connection();
$SQL="update topic set top_choice='2' where top_id=$top_id";
mysql_query($SQL);
 close_connection();
 header("Location:select3.php");
?>