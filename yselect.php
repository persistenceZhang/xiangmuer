<div style=" left: 150px; position: absolute; top:10px;">
<table  bgcolor="#6ae56a" align="center" width="800" height="50">
      <tr>
      <td width="200" height="50"align="center"valign="middle">论文题目</td>
      <td width="200" height="50"align="center"valign="middle">论文类型</td>
	  <td width="200" height="50"align="center"valign="middle">论文来源</td>
	  <td width="200" height="50"align="center"valign="middle">修改操作</td>
      </tr>
</table>
<div style=" left:0px; position: absolute; top:60px;">
  <table width="800" height="50"align="center"border="1px"cellspacing="0">
<?php
include_once("functions/database.php");
get_connection();
include("functions/is_login2.php");
session_start();
$tea_id=$_SESSION["tea_id"];
$search_sql = "select * from topic where tea_id='$tea_id'";
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
<td width="200" height="50" align="center"valign="middle"class="two">
<a href="select_edit.php?top_id=<?php echo $row['top_id']?>"style="text-decoration:none;color:#000000;">修改</a>
</td>
</tr>
<?php
}
?>
</table>
</div>  
 