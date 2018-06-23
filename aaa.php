<?php
include_once("functions/database.php");
session_start();
$th_id=$_GET['th_id'];
get_connection();
$search_sql = "select * from thesis where th_id='$th_id'";
$result_set = mysql_query($search_sql);
$row = mysql_fetch_array($result_set);
$stu_id=$row['stu_id'];
$sco_daily=$_POST['sco_daily'];
$sco_final=$_POST['sco_final'];
 $sql = "insert into score values(null,'$sco_daily','$sco_final','$th_id','$stu_id')";
 get_connection();
 mysql_query($sql);
 $sco_id=mysql_insert_id();
$s="select * from score where sco_id=$sco_id";
$result=mysql_query($s);
close_connection();
$row = mysql_fetch_array($result);
if($row!=null){
	 echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."提交成功！"."\"".")".";"."</script>";
	 echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/bishe/bbb.php?"."\""."</script>";
}
?>