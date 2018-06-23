<?php
include_once("functions/database.php");
$th_id = $_GET["th_id"];
get_connection();
$result_thesis = mysql_query("select *from thesis where th_id=$th_id");
close_connection();
$thesis = mysql_fetch_array($result_thesis);
?>
   <head>
      <title>毕业论文管理信息系统</title>
   </head>
<center>
<h2>修改论文信息</h2>
<form action="thesis_update.php"method="post">
论文题目：<input type="text" name="th_name" value="<?php echo $thesis['th_name']?>"></br>
题目类型：<input type="text" name="th_type" value="<?php echo $thesis['th_type']?>"><br/>
论文内容：<input type="file"  name="th_file"  size="60"  maxlength="15" style="width:150;height:30"/>
<input type="hidden"  name="MAX_FILE_SIZE" value="10485760">
<input type="hidden" name="th_id" value="<?php echo $th_id?>">
<br/>
<input type="submit" value="修改">
</form>
</center>