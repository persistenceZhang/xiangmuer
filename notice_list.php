<table width="1200" height="120" background="uploads/b3.jpg" align="center"
style="left: 0px; position: absolute; top: 0px;font-size:25pt">
<tr>
<td align="center" valign="middle"class="one">��ҵ���Ĺ���ϵͳ��������</td>
</tr>
</table>
<table width="1000" height="100"  valign="middle" align="center" style=" position: absolute; top: 150px;font-size:15pt">
<?php
include_once("functions/database.php");
get_connection();
$search_sql = "select * from notice order by not_id desc";
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("���޼�¼");
}
while($row = mysql_fetch_array($result_set)){
?>
<tr>
<td>
<a href="download.php?file_name=<?php echo $row['file_name'];?>"style='text-decoration:none;'><?php echo $row['file_name'];?></a>
</td>
<td>
<?php echo $row['not_time']?>
</td>
</tr>
<?php
}
?>
</table>
