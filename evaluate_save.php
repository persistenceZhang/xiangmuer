<?php
include("functions/is_login.php");
 include_once("functions/database.php");
session_start();
    $evaluate1=$_POST["evaluate1"];
	$evaluate2=$_POST["evaluate2"];
	$evaluate3=$_POST["evaluate3"];
	$evaluate4=$_POST["evaluate4"];
	$evaluate5=$_POST["evaluate5"];
	$eva_content=$_POST['eva_content'];
    $stu_id=$_SESSION["stu_id"];
	$a="select * from topic where stu_id=$stu_id";
	get_connection();
     $r=mysql_query($a);
    $row = mysql_fetch_array($r);
	$tea_id=$row['tea_id'];
	close_connection();
    $sql = "insert into evaluate values(null,'$evaluate1','$evaluate2','$evaluate3','$evaluate4','$evaluate5','$eva_content','$stu_id','$tea_id')";
     get_connection();
     mysql_query($sql);
	 $eva_id=mysql_insert_id();
    $s="select * from evaluate where eva_id=$eva_id";
    $result=mysql_query($s);
    close_connection();
    $row = mysql_fetch_array($result);
     if($row!=null){
	 echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."ÆÀ¼Û³É¹¦£¡"."\"".")".";"."</script>";
	 echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/bishe/main.php?"."\""."</script>";
}
     ?>