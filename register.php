<?php
include_once("functions/database.php");
if(empty($_POST)){
    exit("您提交的表单数据超过post_max_size的配置！<br/>");
}
$a=$_POST['select']; 
$b=$_POST['select2'];
$m=$_POST['select3'];
$password=$_POST['user_password'];
$confirmPassword=$_POST['confirmPassword'];
if($password!= $confirmPassword){
    exit("输入的密码和确认密码不相等！");
}
$name=$_POST['user_name'];
if($a==1){
$userNameSQL="select * from student where stu_name='$name' and stu_password='$password'";
get_connection();
$resultSet= mysql_query($userNameSQL);
if(mysql_num_rows($resultSet)>0){
    close_connection();
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."已有用户名！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/bishe/register1.php"."\""."</script>";
}
}
else{
$userSQL="select * from teacher where tea_name='$name'and tea_password='$password'";
get_connection();
$resultSet= mysql_query($userSQL);
if(mysql_num_rows($resultSet)>0){
    close_connection();
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."已有用户名！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/bishe/register1.php"."\""."</script>";
}
}
	$c="";
    $c .=mt_rand(0,9);
    $c .=mt_rand(0,9);
    $c .=mt_rand(0,9);
    $c .=mt_rand(0,9);
get_connection();
if($a==1){
$SQL="insert into student values ('$a"."$b"."$m"."$c','$name','$password','$b','$m')";
mysql_query($SQL);
$stu_id=mysql_insert_id();
 close_connection();
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."注册成功！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/bishe/login.php"."\""."</script>";
}
else if($a==2){
get_connection();
$SQL="insert into teacher values ('$a"."$b"."$m"."$c','$name','$password','$b','$m')";
mysql_query($SQL);
$tea_id=mysql_insert_id();
 close_connection();
echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."注册成功！"."\"".")".";"."</script>";
echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost/bishe/login.php"."\""."</script>";
}
?>
