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
$search_sql = "select * from information where inf_sender='$inf_sender' order by inf_id desc";
$keyword = "";
if(isset($_GET["keyword"])){
    $keyword = $_GET["keyword"];
    $search_sql = "select * from information  where inf_sender=$inf_sender and inf_recipient like '%$keyword%'order by inf_id desc";
}
?>
   <head>
      <title>��ҵ���Ĺ���ϵͳ</title>
   </head>
<form action="yfxx.php" method="get">
�������ռ���������<input type="text" name="keyword" value="<?php echo $keyword?>">
<input type="submit" value="����">
</form>
<table  width="800" height="50" align="center">
      <tr>
      <td width="200" height="50"align="center"valign="middle"style="font-size:20px;">�ռ���</td>
	  <td width="400" height="50"align="center"valign="middle"style="font-size:20px;">��Ϣ����</td>
	  <td width="200" height="50"align="center"valign="middle"style="font-size:20px;">����ʱ��</td>
      </tr>
</table>
<table width="800" height="50" align="center"border="1px"cellspacing="0">
<?php
get_connection();
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("���޼�¼");
}
while($row = mysql_fetch_array($result_set)){
?>
<tr>
<td width="200" height="50"align="center"valign="middle"style="font-size:20px;">
<?php echo $row['inf_recipient']?>
</td>
<td width="400" height="50"align="center"valign="middle"style="font-size:20px;">
<?php echo $row['inf_content']?>
</td>
<td width="200" height="50"align="center"valign="middle"style="font-size:20px;">
<?php echo $row['inf_time']?>
</td>
</tr>
<?php
}
?>
</table>

