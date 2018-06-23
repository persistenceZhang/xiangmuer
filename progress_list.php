<table width="1000" height="100"  valign="middle" align="center" style=" position: absolute; top: 10px;font-size:15pt">
<?php
include_once("functions/database.php");
get_connection();
$search_sql = "select * from process order by pro_id desc";
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("暂无记录");
}
while($row = mysql_fetch_array($result_set)){
?>
<tr>
<td width="400" height="100"  valign="middle" align="center" >毕业设计（论文）进展情况记录 （第  
<?php echo $row['pro_week']?>周）
</td>
<td width="600" height="100"  valign="middle" align="center" >
<?php echo $row['pro_content']?>
</td>
</tr>
<?php
}
?>
</table>