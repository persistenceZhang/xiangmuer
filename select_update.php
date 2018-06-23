<?php
include_once("functions/database.php");
$top_id = $_POST["top_id"];
$top_name=$_POST["top_name"];
$top_type=$_POST["top_type"];
$top_source=$_POST["top_source"];
$sql = "update  topic set top_name='$top_name',top_type='$top_type',top_source='$top_source'where top_id=$top_id";
get_connection();
mysql_query($sql);
close_connection();
$message = "论文信息修改成功";
header("Location:yselect.php?message=$message");
?>