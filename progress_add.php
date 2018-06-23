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
<td align="center" valign="middle"class="one">毕业论文管理系统论文进展情况</td>
</tr>
</table>
<div style="left: 0px; position: absolute; top: 15px;font-size:15pt" >
<a href="main.php" style="text-decoration:none;color:#000000;">返回主页</a>
</div>
</div>
<div style="left: 20px; position: absolute; top: 100px;font-size:20pt" >
<table width="1200" height="100"  align="center">
<tr>
<td><input type="button" class="two" onClick="transTo(1)" style="font-weight: bolder;width:390px;border:0" value="填写毕设进展情况"></td>
<td><input type="button" class="two" onClick="transTo(2)" style="font-weight: bolder;width:390px;border:0" value="开题情况记录"></td>
<td><input type="button" class="two" onClick="transTo(3)" style="font-weight: bolder;width:390px;border:0" value="已填毕设进展情况"></td>
</tr>
</table>
</div>
<div style="left: 20px; position: absolute; top: 170px;font-size:20pt" >
<iframe src="bsjz.php" id="iframe4" scrolling="no" WIDTH="1080PX"HEIGHT="700PX" ></iframe>
</div>
<script>
	
		function $(id){
			return document.getElementById(id);
		}
	function transTo(n){
		if(n==1){$("iframe4").src="bsjz.php";}//填写毕设进展
		else if(n==2){$("iframe4").src="ktbg.php";}//开题情况记录
		else if(n==3){$("iframe4").src="progress_list.php";}//已填毕设进展
		else{window.location.href='progress_add.php';}
    }

</script>
