<head>
  <title>毕业论文管理信息系统</title>
</head>
<body background="uploads/b2.jpg" text="black">
</body>
<div style="right: 400px; position: absolute; top: 100px;font-size:20pt">
<form action="thesis_save.php" method="post" enctype="multipart/form-data">
论文标题：
<input type="text" name="th_name" size="60" maxlength="50"  style="width:250;height:30"/>
<br/>
论文类型：
<input type="text" name="th_type" size="60" maxlength="15"  style="width:250;height:30"/>
<br/>
论文内容：
<input type="file"  name="th_file"  size="60"  maxlength="15" style="width:250;height:30"/>
<input type="hidden"  name="MAX_FILE_SIZE" value="10485760">
<br/>
<input type="submit" name="submit" value="提交" style="width:130;height:30"/>
<input type="reset" name="cancel" value="重置" style="width:130;height:30"/>
</form>
</div>