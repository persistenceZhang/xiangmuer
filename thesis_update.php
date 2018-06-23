<?php
include_once("functions/database.php");
$th_id = $_POST["th_id"];
$th_name=$_POST["th_name"];
$th_type=$_POST["th_type"];
$file_name = $_FILES["th_file"]["name"];
$sql = "update  thesis set th_name='$th_name',th_type='$th_type',file_name='$file_name'where th_id=$th_id";
get_connection();
mysql_query($sql);
close_connection();
$message = "论文信息修改成功";
header("Location:thesis_list.php?message=$message");
?>