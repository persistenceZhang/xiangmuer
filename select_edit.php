<?php
include_once("functions/database.php");
$top_id = $_GET["top_id"];
get_connection();
$result_topic = mysql_query("select *from topic where top_id=$top_id");
close_connection();
$topic = mysql_fetch_array($result_topic);
?>
   <head>
      <title>��ҵ���Ĺ�����Ϣϵͳ</title>
   </head>
<center>
<h2>�޸�������Ŀ</h2>
<form action="select_update.php"method="post">
������Ŀ��<input type="text" name="top_name" value="<?php echo $topic['top_name']?>"></br>
��Ŀ���ͣ�<input type="text" name="top_type" value="<?php echo $topic['top_type']?>"><br/>
��Ŀ��Դ��<input type="text" name="top_source" value="<?php echo $topic['top_source']?>"></br>
<input type="hidden" name="top_id" value="<?php echo $top_id?>">
<input type="submit" value="�޸�">
</form>
</center>