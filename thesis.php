<head>
  <title>��ҵ���Ĺ�����Ϣϵͳ</title>
</head>
<style>
   .one{
         font-family:�����п�;
         font-size:36px;
         color:block;
       }
	   .two{
         font-family:����;
         font-size:24px;
         color:blue;
       }
	   </style>

<div style="left: 0px; position: absolute; top: 0px;">
<table width="1200" height="120" background="uploads/b3.jpg" align="center">
<tr>
<td style="left:50px;top:0px;font-size:15pt;font-family:����;">
<a href="main.php" style="text-decoration:none;color:#000000;">������ҳ</a></td>
<td align="center" valign="middle"class="one">��ҵ���Ĺ���ϵͳ��������</td>
</tr>
</table>
</div>
<div style="left: 0px; position: absolute; top: 130px;font-size:20pt" 
<table width="1000" height="120"  valign="middle" align="center">
<tr>
<td><input type="button" class="two" onClick="transTo(1)" style="font-weight: bolder;width:390px;border:0" value="�ϴ�����"></td>
<td><input type="button" class="two" onClick="transTo(2)" style="font-weight: bolder;width:390px;border:0" value="�ѷ�����"></td>
<td><input type="button" class="two" onClick="transTo(3)" style="font-weight: bolder;width:390px;border:0" value="�༭����"></td>
</tr>
</table>
</div>
<div style="left: 20px; position: absolute; top: 170px;font-size:20pt" >
<iframe src="thesis_list.php" id="iframe4" scrolling="no" WIDTH="1080PX"HEIGHT="700PX" ></iframe>
</div>
<script>
	
		function $(id){
			return document.getElementById(id);
		}
	function transTo(n){
		if(n==1){$("iframe4").src="thesis_add.php";}//�ϴ�����
		else if(n==2){$("iframe4").src="thesis_list2.php";}//�ѷ�����
		else if(n==3){$("iframe4").src="thesis_list.php";}//�༭����
		else{window.location.href='thesis.php';}
    }
</script>

