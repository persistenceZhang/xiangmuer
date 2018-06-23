<head>
  <title>毕业论文管理信息系统</title>
</head>
<body background="" text="black">
</body>
<div style="left: 100px; position: absolute; top: 50px;font-size:20pt">
<form action="process_save.php" method="post" enctype="multipart/form-data">
毕业设计（论文）进展情况记录 （第
<input type="text" name="pro_week" size="60" maxlength="15"  style="width:150;height:30"/>周）
<br/>
<textarea cols="120" rows="20" name="pro_content"></textarea><br/>
<input type="submit" name="submit" value="提交" style="width:350;height:30"/>
<input type="reset" name="cancel" value="重填" style="width:350;height:30"/>
</form>
</div>