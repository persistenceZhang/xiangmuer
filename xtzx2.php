<html>
   <head>
      <title>��ҵ���Ĺ���ϵͳ</title>
   </head>
<body background="uploads/b3.jpg" text="black">
<div style="left: 400px; position: absolute;top: 50px;font-size:20pt" >
<h2>��ѡ������Ŀ</h2>
</div>
<div style="left:50px; position: absolute; top:50px;font-size:20pt;font-family:����;">
<a href="main.php" style='text-decoration:none;'>������ҳ</a> <br> 
</div>
<div style=" left: 150px; position: absolute; top:150px;">
<table  bgcolor="#6ae56a" align="center" >
      <tr>
      <td width="300" height="50"align="center"valign="middle"class="three">������Ŀ</td>
	  <td width="200" height="50"align="center"valign="middle"class="three">��ʦ</td>
	  <td width="200" height="50"align="center"valign="middle"class="three">����ѡ�����</td>
      </tr>
</table>
  <table align="center" border="1px"cellspacing="0">
<?php
include_once("functions/database.php");
get_connection();
$search_sql = "select * from topic";
$result_set = mysql_query($search_sql);
close_connection();
if(mysql_num_rows($result_set)==0){
exit("���޼�¼");
}
while($row = mysql_fetch_array($result_set)){
?>
<tr>
<td width="300" height="50" align="center"valign="middle"class="two"><?php echo $row['top_name'];?></td>
<td width="200" height="50" align="center"valign="middle"class="two">
<?php $a=$row['tea_id'];
get_connection();
$sql= "select tea_name from teacher where tea_id=$a";
$tea_name= mysql_query($sql);
$t=mysql_result($tea_name,0);
echo $t;?></td>
<td width="200" height="50" align="center"valign="middle"class="two"><?php 
if($row['top_choice']==null){
echo"��δѡ��";}
else if($row['top_choice']==1){
echo"ѡ�������";}
else if($row['top_choice']==2){
echo"ѡ��ɹ�";}
else{echo "ѡ��ʧ��";}
?></td>
</tr>
<?php
}
?>
</table>
</div> 
</body> 
</html>
