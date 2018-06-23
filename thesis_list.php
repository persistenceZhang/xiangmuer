<?php
include_once("functions/database.php");
$search_sql = "select * from thesis order by th_id desc";
$keyword = "";
if(isset($_GET["keyword"])){
    $keyword = $_GET["keyword"];
    $search_sql = "select *from thesis  where th_name like '%$keyword%'order by th_id desc";
}
?>
   <head>
      <title>毕业论文管理系统</title>
   </head>
<form action="thesis_list.php" method="get">
请输入关键字：<input type="text" name="keyword" value="<?php echo $keyword?>">
<input type="submit" value="搜索">
</form>
<table width="1000" height="100"  valign="middle" align="center" style=" position: absolute; top: 50px;font-size:15pt">
<?php
get_connection();
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("暂无记录");
}
while($row = mysql_fetch_array($result_set)){
?>
<tr>
<td>
<?php echo $row['th_name']?>
</td>
<td>
<?php echo $row['th_type']?>
</td>
<td>
<?php echo $row['th_date']?>
</td>
<td>
<a href="download.php?file_name=<?php echo $row['file_name'];?>"style='text-decoration:none;'><?php echo $row['file_name'];?></a>
</td>
<td>
<a href="thesis_edit.php?th_id=<?php echo $row['th_id']?>"style='text-decoration:none;'>编辑</a>
</td>
<td>
<a href="thesis_delete.php?th_id=<?php echo $row['th_id']?>"style='text-decoration:none;'>删除</a>
</td>
</tr>
<?php
}
?>
</table>