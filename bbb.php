

<div style="left: 500px; position: absolute;font-size:20pt" >
<h2>ѧ���ɼ�</h2>
</div>
<table border="1" cellspacing="0" bgcolor="#6ae56a" align="center"style=" left: 100px; position: absolute; top:100px;">
      <tr>
      <td width="200" height="50"align="center"valign="middle"class="three">ѧ������</td>
      <td width="200" height="50"align="center"valign="middle"class="three">������Ŀ</td>
      <td width="200" height="50"align="center"valign="middle"class="three">ƽʱ�ɼ�</td>
      <td width="200" height="50"align="center"valign="middle"class="three">���ճɼ�</td>
      </tr>
</table>
  <table  border="1" cellspacing="0" style=" left:100px; position: absolute; top:150px;"align="center">
<?php
include_once("functions/database.php");
get_connection();
$search_sql = "select * from score";
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("���޼�¼");
}
while($row = mysql_fetch_array($result_set)){	
?>
<tr>
<td width="200" height="50" align="center"valign="middle"class="two"><?php 
  $a=$row['stu_id']; 
 get_connection();
$sql= "select stu_name from student where stu_id=$a";
$stu_name= mysql_query($sql);
$t=mysql_result($stu_name,0);
echo $t;
?></td>
<td width="200" height="45" align="center"valign="middle"class="two"><?php
$b=$row['th_id'];
get_connection();
$sql= "select th_name from thesis where th_id=$b";
$th_name= mysql_query($sql);
$t=mysql_result($th_name,0);
echo $t;?></td>
<td width="200" height="45" align="center"valign="middle"class="two"><?php echo $row['sco_daliy'];?></td>
<td width="200" height="45" align="center"valign="middle"class="two"><?php echo $row['sco_final'];?></td>
</tr>
</form>
<?PHP
}
?>
<br>
</table>