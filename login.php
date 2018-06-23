<?php
session_start();
include_once("functions/is_login.php");
include_once("functions/is_login2.php");
if(isset($_GET["login_message"])){
   if($_GET["login_message"]=="checknum_error"){
     echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."验证码错误！"."\"".")".";"."</script>";
   }else if($_GET["login_message"]=="password_error"){
     echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."密码错误！"."\"".")".";"."</script>";
   }else if($_GET["login_message"]=="password_right"){
     echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."登录成功！"."\"".")".";"."</script>";
   }
}
$user_name="";
if(isset($_COOKIE["user_name"])){
$user_name=$_COOKIE["user_name"];
}
$user_password="";
if(isset($_COOKIE["user_password"])){
$user_password=$_COOKIE["user_password"];
}
?>
<head>
  <title>毕业论文管理系统</title>
</head>

<body background="uploads/b3.jpg" text="black">
<div style="left: 650px; position: absolute;top: 210px;font-size:20pt" >
<h2>毕业论文管理系统用户登录</h2>
<hr/>
</div>
<div style="left: 690px; position: absolute; top: 350px;font-size:20pt" >
<form action="login_process.php" method="post">
用 户 名：
<input type="text" name="user_name" size="20" maxlength="15" value="<?php echo $user_name ?>" style="width:170px;height:30px"/>
<br/>
登录密码：
<input type="password" name="user_password" size="15" maxlength="15"  value="<?php echo $user_password ?>" style="width:170px;height:30px"/>
<br/>
用户对象：
<select  name="select" style="width:150;height:30">
   <option value="1">学生</option>
   <option value="2">老师</option>
 </select>
<br/>
验 证 码：
<input type="text" name="checknum" size="4" maxlength="4" style="width:100px;height:30px"/>
<?php
$checknum="";
$checknum .=mt_rand(0,9);
$checknum .=mt_rand(0,9);
$checknum .=mt_rand(0,9);
$checknum .=mt_rand(0,9);
$_SESSION['checknum']=$checknum;
echo $checknum ;
?>
<input type="hidden"  name="expire" value="3600"  checked/><br/>
<input type="submit"   value="登录" style="width:100px;height:30px"/>
<input type="button" onclick="window.location.href='register1.php'" value="注册" style="width:100px;height:30px"/>
</form>
</div>
</body>
