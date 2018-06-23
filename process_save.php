<?php
include("functions/is_login.php");
session_start();
    $pro_week=$_POST["pro_week"];
    $pro_content= $_POST["pro_content"];
	$stu_id=$_SESSION["stu_id"];
    $sql = "insert into process values(null,'$pro_week','$pro_content','stu_id')";
     include_once("functions/database.php");
     get_connection();
     mysql_query($sql);
     close_connection();
header("Location:progress_list.php?");
?>