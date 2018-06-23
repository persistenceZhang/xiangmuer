<html>
   <head>
      <title>毕业论文管理系统</title>
   </head>
<body background="uploads/b3.jpg" text="black">
<div style="left: 400px; position: absolute;top: 50px;font-size:20pt" >
<h2>毕业论文选题中心</h2>
</div>
<div style="left:50px; position: absolute; top:50px;font-size:20pt;font-family:隶书;">
<a href="xtzx3.php" style='text-decoration:none;'>查看选课结果</a> <br> 
</div>
<div style="right:50px; position: absolute; top:50px;font-size:20pt;font-family:隶书;">
<a href="logout.php" style='text-decoration:none;'>注销</a> <br> 
</div>
<div style=" left: 150px; position: absolute; top:150px;">
<table  bgcolor="#6ae56a" align="center">
      <tr>
      <td width="200" height="50"align="center"valign="middle"class="three">论文题目</td>
      <td width="200" height="50"align="center"valign="middle"class="three">题目类型</td>
      <td width="200" height="50"align="center"valign="middle"class="three">题目起源</td>
      <td width="200" height="50"align="center"valign="middle"class="three">论题选择</td>
      </tr>
</table>
  <table align="center">
<?php
include_once("functions/is_login.php");
session_start();
$stu_id=$_SESSION["stu_id"];
include_once("functions/database.php");
$search= "select * from topic where stu_id='$stu_id'";
get_connection();
$result = mysql_query($search);
close_connection();
$topic = mysql_fetch_array($result);
$h=$topic['top_choice'];
if($h!=2){
get_connection();
$search_sql = "select * from topic";
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("暂无记录");
}
while($row = mysql_fetch_array($result_set)){
	?>
<tr>
<td width="200" height="50" align="center"valign="middle"class="two"><?php echo $row['top_name'];?></td>
<td width="200" height="50" align="center"valign="middle"class="two"><?php echo $row['top_type'];?></td>
<td width="200" height="50" align="center"valign="middle"class="two"><?php echo $row['top_source'];?></td>
<td><?php $a=$row['top_choice'];
if($a!=2){?><a href="xtzx3.php?top_id=<?php echo $row['top_id']?>"><button>选择该论题</button></a><?php } ?>
<?php
}
}else{echo "选题已成功！不能选择其他论题";}
?>
</table>
</div> 
</body> 
</html>
