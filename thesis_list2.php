
<?php
include_once("functions/database.php");
$search_sql = "select * from thesis order by th_id desc";
$keyword = "";
if(isset($_GET["keyword"])){
    $keyword = $_GET["keyword"];
    $search_sql = "select *from thesis  where th_name like '%$keyword%'order by th_id desc";
}
?>
<form action="thesis_list2.php" method="get"style="left: 400px; position: absolute; top: 50px;font-size:25px;">
请输入关键字：<input type="text" name="keyword" value="<?php echo $keyword?>">
<input type="submit" value="搜索">
</form>
<table width="1000" height="100"  valign="middle" align="center" style=" position: absolute; top: 80px;font-size:15pt">
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
<?php 
get_connection();
$a=$row['stu_id'];
$sql= "select * from student where stu_id=$a";
$s= mysql_query($sql);
$student = mysql_fetch_array($s);
$stu_name=$student['stu_name'];
echo $stu_name;
?>
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
</tr>
<?php
}
?>
</table>