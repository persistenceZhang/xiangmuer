<style>
   .one{
         font-family:宋体;
         font-size:24px;
         color:#6683FF;
       }
      
	  </style>
<div style="left: 500px; position: absolute;font-size:20pt" >
<h2>学生成绩</h2>
</div>
<?php
include_once("functions/is_login.php");
include_once("functions/database.php");
session_start();
$stu_id=$_SESSION["stu_id"];
$sql2="select * from score where stu_id=$stu_id";
$sql="select stu_name from student where stu_id=$stu_id";
get_connection();
$t=mysql_query($sql);
$stu_name=mysql_result($t,0);
$result=mysql_query($sql2);
$score=mysql_fetch_array($result);
$th_id=$score['th_id'];
$sql3="select th_name from thesis where th_id=$th_id";
$h=mysql_query($sql3);
$th_name=mysql_result($h,0);
close_connection();
?>
<div style="left: 0px; position: absolute; top:80px" >
<table width="1000" height="350"align="center">
<tr>
<td align="center"valign="middle"class="one">学生姓名：<?php echo $stu_name;?></td>
</tr>
<tr>
<td align="center"valign="middle"class="one">论文题目:<?php echo $th_name;?></td>
</tr>
<tr>
<td align="center"valign="middle"class="one">平时成绩:<?php echo $score['sco_daliy'];?></td>
</tr>
<tr>
<td align="center"valign="middle"class="one">最终成绩:<?php echo $score['sco_final'];?></td>
</tr>
</table>
</div>