<?php
include("functions/is_login.php");
session_start();
include_once("functions/database.php");
include("functions/file_system.php");
if (empty($_POST)){
    $message = "�ϴ����ļ�������php.ini ��post_max_sizeѡ�����Ƶ�ֵ";
}else{
    $th_name=$_POST["th_name"];
    $th_date= date("Y-m-d H:i:s");
    $th_click=0;
    $th_type=$_POST["th_type"];
    $stu_id=$_SESSION["stu_id"];
	get_connection();
    $sql= "select * from topic where stu_id='$stu_id'";
    $result_set= mysql_query($sql);
	close_connection();
	$row = mysql_fetch_array($result_set);
	$tea_id=$row['tea_id'];
    $file_name = $_FILES["th_file"]["name"];
    $message = upload($_FILES["th_file"],"uploads");
    $sql = "insert into thesis values(null,'$th_name','$th_type','$th_date','$th_click','$file_name','$stu_id','$tea_id')";
   if($message=="�ļ��ϴ��ɹ���"||$message=="û��ѡ���ϴ�������"){
     include_once("functions/database.php");
     get_connection();
     mysql_query($sql);
     close_connection();
   }
}
$message = urlencode($message);
header("Location:thesis_list.php?message=$message");
?>
