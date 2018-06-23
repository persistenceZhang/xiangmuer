<head>
  <title>毕业论文管理信息系统</title>
</head>
<div style="left: 500px; position: absolute;font-size:20pt" >
<h2>毕业论文管理信息系统用户注册</h2>
</div>
<body background="uploads/b1.jpg" text="black">
</body>
<div style="right: 300px; position: absolute; top: 250px;font-size:20pt">
<form action="register.php" method="post" enctype="multipart/form-data">
用 户 名：
<input type="text" name="user_name" size="20" maxlength="15" value="必须填写用户名" style="width:150;height:30"/>
<br/>

登录密码：
<input type="password"  name="user_password"  size="20"  maxlength="15" style="width:150;height:30"/>
<br/>

确认密码：
<input type="password"  name="confirmPassword"  size="20"  maxlength="15" style="width:150;height:30"/>
<br/>
注册对象：
<select  name="select" style="width:150;height:30">
   <option value="1">学生</option>
   <option value="2">老师</option>
 </select>
<br/>
学&nbsp&nbsp&nbsp&nbsp校：
<select  name="select2" style="width:150;height:30">
   <option value="10240">哈尔滨商业大学</option>
   <option value="10213">哈尔滨工业大学</option>
   <option value="10214">哈尔滨理工大学</option>
   <option value="10610">四川大学</option>
   <option value="10635">西南财经大学</option>
 </select>
<br/>
专&nbsp&nbsp&nbsp&nbsp业：
<select  name="select3" style="width:150;height:30">
   <option value="1101">软件工程</option>
   <option value="1102">信息管理与信息系统</option>
   <option value="1103">电子商务</option>
   <option value="1104">会计</option>
   <option value="1105">药学</option>
 </select>
<br/>
<input type="submit"  name="submit" value="注册" style="width:130;height:30"/>
<input type="reset" name="cancel" value="重置" style="width:130;height:30"/>
</form>
</div>