<table width="1200" height="120" background="uploads/b3.jpg" align="center">
<tr>
<td align="center" valign="middle"style="font-family:华文行楷;font-size:36px;color:block">毕业论文管理系统评价中心</td>
</tr>
</table>
<table width="1000" height="100"  valign="middle" align="center" style=" position: absolute; top: 150px;font-size:15pt">
<?php
include_once("functions/database.php");
get_connection();
$search_sql = "select * from evaluate order by eva_id desc";
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("暂无记录");
}
while($row = mysql_fetch_array($result_set)){
?>
<tr>
<td align="center"valign="middle"><?php $a=$row['stu_id'];
get_connection();
$sql= "select stu_name from student where stu_id=$a";
$stu_name= mysql_query($sql);
$t=mysql_result($stu_name,0);
echo $t;?></td>
<td align="center"valign="middle">
<table width="800" height="100">
<tr><td align="center"valign="middle"style="font-size:15pt">认真负责，对学生要求严格：<?php echo $row['evaluate1'];?></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td align="center"valign="middle"style="font-size:15pt">注重启发，并给于思路引导：<?php echo $row['evaluate2'];?></td></tr>
<tr><td align="center"valign="middle"style="font-size:15pt">按时检查，并提出修改意见：<?php echo $row['evaluate3'];?></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td align="center"valign="middle"style="font-size:15pt">注重交流，为学生排忧解难：<?php echo $row['evaluate4'];?></td></tr>
<tr><td align="center"valign="middle"style="font-size:15pt">关爱学生，了解学生的困难：<?php echo $row['evaluate5'];?></td>
<td align="center"valign="middle"style="font-size:15pt">学生对导师说的话：<?php echo $row['eva_content'];?></td></tr>
</td>
</tr>
<?php
}
?>
</table>
