<head>
  <title>毕业论文管理信息系统</title>
</head>
<style>
   .one{
         font-family:华文行楷;
         font-size:36px;
         color:block;
       }
	   .two{
         font-family:仿宋;
         font-size:24px;
         color:blue;
       }
	   </style>
<div style="left: 0px; position: absolute; top: 0px;font-size:20pt" >
<table width="1200" height="120" background="uploads/b3.jpg" align="center">
<tr>
<td align="center" valign="middle"class="one">毕业论文管理系统师生交流中心</td>
</tr>
</table>
<div style="left: 0px; position: absolute; top: 15px;font-size:15pt" >
<a href="main.php" style="text-decoration:none;color:#000000;">返回主页</a>
</div>
</div>
<div style="left: 0px; position: absolute; top: 130px;font-size:20pt" 
<table width="1000" height="120"  valign="middle" align="center">
<tr>
<td><input type="button" class="two" onClick="transTo(1)" style="font-weight: bolder;width:390px;border:0" value="已收信息"></td>
<td><input type="button" class="two" onClick="transTo(2)" style="font-weight: bolder;width:390px;border:0" value="已发信息"></td>
<td><input type="button" class="two" onClick="transTo(3)" style="font-weight: bolder;width:390px;border:0" value="编写信息"></td>
</tr>
</table>
</div>
<div style="left: 20px; position: absolute; top: 170px;font-size:20pt" >
<iframe src="ysxx.php" id="iframe4" scrolling="no" WIDTH="1080PX"HEIGHT="700PX" ></iframe>
</div>
<script>
	
		function $(id){
			return document.getElementById(id);
		}
	function transTo(n){
		if(n==1){$("iframe4").src="ysxx.php";}//已收信息
		else if(n==2){$("iframe4").src="yfxx.php";}//已发信息
		else if(n==3){$("iframe4").src="bxxx.php";}//编写信息
		else{window.location.href='information.php';}
    }
</script>
