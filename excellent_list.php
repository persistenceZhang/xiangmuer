
<table width="1200" height="120" background="uploads/b3.jpg" align="center">
<tr>
<td align="center" valign="middle"style="font-size:36px;">毕业论文管理系统优秀论文</td>
</tr>
</table>
<table  width="1000" height="50" align="center">
      <tr>
	  <td width="200" height="50"align="center"valign="middle"style="font-size:20px;">学生姓名</td>
      <td width="200" height="50"align="center"valign="middle"style="font-size:20px;">论文题目</td>
	  <td width="200" height="50"align="center"valign="middle"style="font-size:20px;">分数</td>
      </tr>
</table>
<table width="1000" height="100"  valign="middle" align="center"border="1px"cellspacing="0">
<?php
include_once("functions/is_login.php");
session_start();
include_once("functions/database.php");
get_connection();
$search_sql = "select * from score where  sco_final>90 and sco_daliy>25 order by sco_id desc";
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("暂无记录");
}
while($row = mysql_fetch_array($result_set)){
?>
<tr>
<td width="200" height="50" align="center"valign="middle"style="font-size:20px;"><?php
$a=$row['stu_id'];
get_connection();
$sql= "select stu_name from student where stu_id=$a";
$stu_name= mysql_query($sql);
$t=mysql_result($stu_name,0);
echo $t;?>
<td width="200" height="50" align="center"valign="middle"style="font-size:20px;">
<?php $b=$row['th_id'];
get_connection();
$s= "select th_name from thesis where th_id=$b";
$t= mysql_query($s);
$th_name=mysql_result($t,0);
echo $th_name;?></td>
<td width="200" height="50" align="center"valign="middle"style="font-size:20px;"><?php echo $row['sco_final'];?></td>
</tr>
<?php
}
?>
</table> 


