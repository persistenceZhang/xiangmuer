<div style="left: 500px; position: absolute;font-size:20pt" >
<h2>学生成绩</h2>
</div>
<table border="1" cellspacing="0" bgcolor="#6ae56a" align="center"style=" left: 100px; position: absolute; top:100px;">
      <tr>
      <td width="200" height="50"align="center"valign="middle"class="three">学生姓名</td>
      <td width="200" height="50"align="center"valign="middle"class="three">论文题目</td>
      <td width="200" height="50"align="center"valign="middle"class="three">平时成绩</td>
      <td width="200" height="50"align="center"valign="middle"class="three">最终成绩</td>
      </tr>
</table>
  <table  border="1" cellspacing="0" style=" left:100px; position: absolute; top:150px;"align="center">
<?php
include_once("functions/database.php");
session_start(); 
get_connection();
$sco_daily = "";
$sco_final = "";
if(isset($_GET["sco_daily"])){
$sco_daily = $_GET["sco_daily"];
}
if(isset($_GET["sco_final"])){
$sco_final = $_GET["sco_final"];
}
$search_sql = "select * from thesis ";
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("暂无记录");
}
while($row = mysql_fetch_array($result_set)){
?> 
<?php 
$th_id=$row['th_id'];$sql= "select * from score where th_id='$th_id'";
get_connection();
$s= mysql_query($sql);
$score = mysql_fetch_array($s);
$i=$score['sco_final'];
if($i==null){
?>
<tr>
<td width="200" height="50" align="center"valign="middle"class="two"><?php
 $a=$row['stu_id'];
get_connection();
$sql= "select stu_name from student where stu_id=$a";
$stu_name= mysql_query($sql);
$t=mysql_result($stu_name,0);
echo $t;?></td>
<td width="200" height="45" align="center"valign="middle"class="two"><?php echo $row['th_name'];?></td>
<td width="405" height="45" align="center"valign="middle"class="two">
<form action="aaa.php?th_id=<?PHP $th_id=$row['th_id'];echo $th_id;?>" method="post">
<input type="text" name="sco_daily" value="<?php echo $sco_daily?>" size="30" maxlength="15" style="position:relative;top:7px;width:198;height:50"/>
<input type="text" name="sco_final" value="<?php echo $sco_final?>"size="30" maxlength="15" style="position:relative;top:7px;width:198;height:50"/>
</td>
<td  width="210">
<input type="submit"  name="submit" value="提交" style="width:198;height:50"/>
</td>
</tr>
</form>
<?php
}
}
?>
</table>
