<head>
  <title>毕业论文管理信息系统</title>
</head>
<div style="left: 300px; position: absolute;font-size:17pt" >
<h2>毕业论文管理系统发布公告</h2>
</div>
<div style="right: 300px; position: absolute; top: 100px;font-size:20pt">
<form action="notice_add.php" method="post" enctype="multipart/form-data">
公告：
<input type="file"  name="th_file"  size="60"  maxlength="15" style="width:150;height:30"/>
<input type="hidden"  name="MAX_FILE_SIZE" value="10485760">
<input type="submit" name="submit" value="发布" style="width:200;height:30"/>
</form>
</div>
<?php
include("functions/file_system.php");
if (empty($_POST)){
    $message = "上传的文件超过了php.ini 中post_max_size选项限制的值";
}else{
    $file_name = $_FILES["th_file"]["name"];
	$not_time = date("Y-m-d H:i:s");
    $message = upload($_FILES["th_file"],"uploads");
    $sql = "insert into notice values(null,'$file_name','not_time')";
   if($message=="文件上传成功！"||$message=="没有选择上传附件！"){
     include_once("functions/database.php");
     get_connection();
     mysql_query($sql);
     close_connection();
   }
}
$message = urlencode($message);
?>
<table width="1000" height="100"  valign="middle" align="center" style=" position: absolute; top: 150px;font-size:15pt">
<?php
include_once("functions/database.php");
get_connection();
$search_sql = "select * from notice order by not_id desc";
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("暂无记录");
}
while($row = mysql_fetch_array($result_set)){
?>
<tr>
<td>
<a href="download.php?file_name=<?php echo $row['file_name'];?>"style='text-decoration:none;'><?php echo $row['file_name'];?></a>
</td>
<td>
<a href="notice_edit.php?th_id=<?php echo $row['not_id']?>" style='text-decoration:none;'>编辑</a>
</td>
<td>
<a href="notice_delete.php?th_id=<?php echo $row['not_id']?>" style='text-decoration:none;'>删除</a>
</td>
</tr>
<?php
}
?>
</table>
