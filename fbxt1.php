<?php
include_once("functions/database.php");
include_once("functions/is_login2.php");
session_start();
if(empty($_POST)){
    exit("您提交的表单数据超过post_max_size的配置！<br/>");
}
$top_name=$_POST['top_name'];
$thesisNameSQL="select * from topic where top_name='$top_name'";
get_connection();
$resultSet= mysql_query($thesisNameSQL);
if(mysql_num_rows($resultSet)>0){
    close_connection();
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."已有该论文题目！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost:8080/bishe/fbxt.php"."\""."</script>";
}
$top_type=$_POST['top_type'];
$top_source=$_POST['top_source'];
$tea_id=$_SESSION["tea_id"];
get_connection();
$SQL="insert into topic values (null,'$top_name','$top_type','$top_source ','$tea_id','','')";
mysql_query($SQL);
$top_id=mysql_insert_id();
 close_connection();
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."发布成功！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/bishe/yselect.php"."\""."</script>";
?>