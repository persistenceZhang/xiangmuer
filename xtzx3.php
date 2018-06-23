<?php
include_once("functions/is_login.php");
session_start();
include_once("functions/database.php");
$stu_id=$_SESSION["stu_id"];
$top_id=$_GET["top_id"];
get_connection();
$SQL="update topic set stu_id='$stu_id',top_choice='1'where top_id='$top_id'";
mysql_query($SQL);
 close_connection();
 header("Location:xtzx2.php?");
?>
