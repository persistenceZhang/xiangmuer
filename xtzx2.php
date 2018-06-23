<html>
   <head>
      <title>毕业论文管理系统</title>
   </head>
<body background="uploads/b3.jpg" text="black">
<div style="left: 400px; position: absolute;top: 50px;font-size:20pt" >
<h2>已选论文题目</h2>
</div>
<div style="left:50px; position: absolute; top:50px;font-size:20pt;font-family:隶书;">
<a href="main.php" style='text-decoration:none;'>返回主页</a> <br> 
</div>
<div style=" left: 150px; position: absolute; top:150px;">
<table  bgcolor="#6ae56a" align="center" >
      <tr>
      <td width="300" height="50"align="center"valign="middle"class="three">论文题目</td>
	  <td width="200" height="50"align="center"valign="middle"class="three">导师</td>
	  <td width="200" height="50"align="center"valign="middle"class="three">论题选择情况</td>
      </tr>
</table>
  <table align="center" border="1px"cellspacing="0">
<?php
include_once("functions/database.php");
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
<td width="300" height="50" align="center"valign="middle"class="two"><?php echo $row['top_name'];?></td>
<td width="200" height="50" align="center"valign="middle"class="two">
<?php $a=$row['tea_id'];
get_connection();
$sql= "select tea_name from teacher where tea_id=$a";
$tea_name= mysql_query($sql);
$t=mysql_result($tea_name,0);
echo $t;?></td>
<td width="200" height="50" align="center"valign="middle"class="two"><?php 
if($row['top_choice']==null){
echo"还未选题";}
else if($row['top_choice']==1){
echo"选题进行中";}
else if($row['top_choice']==2){
echo"选题成功";}
else{echo "选题失败";}
?></td>
</tr>
<?php
}
?>
</table>
</div> 
</body> 
</html>
