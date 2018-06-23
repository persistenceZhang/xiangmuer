<head>
  <title>毕业论文管理信息系统</title>
</head>
<body background="" text="black">
</body>
<div style="left: 100px; position: absolute; top: 20px;font-size:20pt">
<form action="thesis_save.php" method="post" enctype="multipart/form-data">
论文题目：
<input type="text" name="th_name" size="60" maxlength="15"  style="width:500;height:30"/>
<br/>
题目类型：
<input type="checkbox" name="th_type" id="th_type" value="理论研究">理论研究
<input type="checkbox" name="th_type" id="th_type" value="实验研究">实验研究
<input type="checkbox" name="th_type" id="th_type" value="应用研究">应用研究
<br/>
<input type="checkbox" name="th_type" id="th_type" value="生产实践">生产实践
<input type="checkbox" name="th_type" id="th_type" value="工程设计">工程设计
<input type="checkbox" name="th_type" id="th_type" value="软件开发">软件开发
<input type="checkbox" name="th_type" id="th_type" value="调查研究">调查研究
<input type="checkbox" name="th_type" id="th_type" value="其他">其他
</br>
毕业设计的研究目的及意义<br/>
<textarea cols="120" rows="10" name="pro_content"></textarea><br/>
主要研究内容
<textarea cols="120" rows="10" name="pro_content"></textarea><br/>
研究方法、步骤
<textarea cols="120" rows="10" name="pro_content"></textarea><br/>
<input type="submit" name="submit" value="提交" style="width:350;height:30"/>
<input type="reset" name="cancel" value="重填" style="width:350;height:30"/>
</form>
</div>
