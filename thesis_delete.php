<?php
include_once("functions/database.php");
$th_id=$_GET["th_id"];
get_connection();
mysql_query("delete from thesis where th_id=$th_id");
close_connection();
$message="删除成功！";
header("Location:thesis_list.php?message=$message");
?>