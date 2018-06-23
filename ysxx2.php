<?php
include_once("functions/database.php");
include("functions/is_login2.php");
session_start();
$tea_id=$_SESSION["tea_id"];
$sql="select tea_name from teacher where tea_id=$tea_id";
get_connection();
$i=mysql_query($sql);
$inf_recipient=mysql_result($i,0);
close_connection();
$search_sql = "select * from information where inf_recipient='$inf_recipient' order by inf_id desc";
$keyword = "";
if(isset($_GET["keyword"])){
    $keyword = $_GET["keyword"];
    $search_sql = "select * from information  where inf_recipient='$inf_recipient'and inf_sender like '%$keyword%'order by inf_id desc";
}
?>
   <head>
      <title>毕业论文管理系统</title>
   </head>
<form action="ysxx2.php" method="get">
请输入发件人姓名：<input type="text" name="keyword" value="<?php echo $keyword?>">
<input type="submit" value="搜索">
</form>
<div style="right:10px; position: absolute; top:10px;font-size:16pt;font-family:隶书;">
<a href="main.php" style='text-decoration:none;'>返回主页</a> <br> </div>
<br/>
<table  width="800" height="50" align="center">
      <tr>
      <td width="200" height="50"align="center"valign="middle"style="font-size:20px;">发件人</td>
	  <td width="400" height="50"align="center"valign="middle"style="font-size:20px;">信息内容</td>
	  <td width="200" height="50"align="center"valign="middle"style="font-size:20px;">发送时间</td>
      </tr>
</table>
<table width="800" height="100"border="1px"cellspacing="0"align="center">
<?php
get_connection();
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("暂无记录");
}
while($row = mysql_fetch_array($result_set)){
?>
<tr>
<td width="200" height="100"align="center"valign="middle"style="font-size:20px;">
<?php echo $row['inf_sender']?>
</td>
<td width="400" height="100"align="center"valign="middle"style="font-size:20px;">
<?php echo $row['inf_content']?>
</td>
<td width="200" height="100"align="center"valign="middle"style="font-size:20px;">
<?php echo $row['inf_time']?>
</td>
</tr>
<?php
}
?>
</table>