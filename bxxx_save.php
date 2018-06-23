<?php
include_once("functions/database.php");
include("functions/is_login.php");
session_start();
  $stu_id=$_SESSION["stu_id"];
  $sql="select stu_name from student where stu_id=$stu_id";
  get_connection();
  $i=mysql_query($sql);
  $inf_sender=mysql_result($i,0);
  close_connection();
  $inf_recipient=$_POST["inf_recipient"];
  $inf_content=$_POST["inf_content"];
  $inf_time=date("Y-m-d H:i:s");
  get_connection();
  $sql="insert into information values(null,'$inf_content','$inf_sender','$inf_recipient','$inf_time')";
  mysql_query($sql);
  close_connection();
  header("Location:yfxx.php?");
  ?>