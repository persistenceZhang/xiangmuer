<?php
session_start();
include_once("functions/database.php");
$user_password = $_POST["user_password"];
$user_name=$_POST["user_name"];
$checknum=$_POST["checknum"];
$a=$_POST["select"];
if($_POST["checknum"] != $_SESSION["checknum"]){
header("Location:login.php?login_message=checknum_error");
return;
}
if(isset($_COOKIE["user_password"])){
 $first_password=$_COOKIE["user_password"];
}else{
  $first_password= md5($_POST["user_password"]);
}
if(empty($_POST["expire"])){
    setcookie("user_name",$user_name,time()-1);
    setcookie("user_password",$first_password,time()-1);
}
if($a==1){
$sql="select * from student where stu_name='$user_name' and stu_password='$user_password'";
get_connection();
$result_set= mysql_query($sql);
close_connection();
}
else if($a==2){
get_connection();
$sql2="select * from teacher where tea_name='$user_name' and tea_password='$user_password'";	
$result_set2= mysql_query($sql2);
}
if(mysql_num_rows($result_set)>0 ){
  if(isset($_POST["expire"])){
  $expire=time()+intval($_POST["expire"]);
  setcookie("user_name",$user_name,$expire);
  setcookie("user_password",$first_password,$expire);  }
  $admin=mysql_fetch_array($result_set);
  $_SESSION['stu_id']=$admin['stu_id'];
  $_SESSION['stu_name']=$admin['stu_name'];
  header("Location:main.php?login_message=password_right");}

else if(mysql_num_rows($result_set2)>0){
  if(isset($_POST["expire"])){
  $expire=time()+intval($_POST["expire"]);
  setcookie("user_name",$user_name,$expire);
  setcookie("user_password",$first_password,$expire);  }
  $admin=mysql_fetch_array($result_set2);
  $_SESSION['tea_id']=$admin['tea_id'];
  $_SESSION['tea_name']=$admin['tea_name'];
  header("Location:main2.php?login_message=password_right");}

else{
  header("Location:login.php?login_message=password_error");}
  close_connection();
?>
