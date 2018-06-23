<html>
   <head>
      <title>毕业论文管理系统</title>
   </head>
<div style=" left: 50px; position: absolute; top:10px;">
<table  width="1000" height="50"bgcolor="#6ae56a" align="center">
      <tr>
      <td width="200" height="50"align="center"valign="middle"class="three">论文题目</td>
	  <td width="200" height="50"align="center"valign="middle"class="three">学生姓名</td>
	  <td width="400" height="50"align="center"valign="middle"class="three">选择学生</td>
	  <td width="200" height="50"align="center"valign="middle"class="three">论题选择情况</td>
      </tr>
</table>
  <table width="1000" height="50"align="center"border="1px"cellspacing="0">
<?php
include_once("functions/is_login2.php");
session_start();
include_once("functions/database.php");
get_connection();
$tea_id=$_SESSION["tea_id"];
$search_sql = "select * from topic where tea_id='$tea_id'";
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("暂无记录");
}
while($row = mysql_fetch_array($result_set)){
?>
<?php 
$a=$row['stu_id'];
if($a!=null){
	?>
<tr>
<td width="200" height="50" align="center"valign="middle"class="two"><?php echo $row['top_name'];?></td>
<td width="200" height="50" align="center"valign="middle"class="two"><?php
$a=$row['stu_id'];
if($a!=null){
get_connection();
$sql= "select stu_name from student where stu_id=$a";
$stu_name= mysql_query($sql);
$t=mysql_result($stu_name,0);
echo $t;}
else{echo "没有学生选择该论题";}?>
<td width="200" height="50" align="center"valign="middle"><a href="select4.php?top_id=<?php echo $row['top_id']?>"><button>选择该学生</button></a></td>
<td width="200" height="50" align="center"valign="middle"><a href="select5.php?top_id=<?php echo $row['top_id']?>"><button>不选择该学生</button></a></td>
<td width="200" height="50" align="center"valign="middle"class="two">
<?php if($row['top_choice']==null){
echo"还未选题";}
else if($row['top_choice']==1){
echo"选题进行中";}
else if($row['top_choice']==2){
echo"选题成功";}
else{echo "选题失败";}?></td>
</tr>
<?php
}
else{
	?>
<tr>
<td width="200" height="50" align="center"valign="middle"class="two"><?php echo $row['top_name'];?></td>
<td width="200" height="50" align="center"valign="middle"class="two"><?php echo "没有学生选择该论题";?></td>	
<?php
}
}
?>
</table>
</div>  
</html>
