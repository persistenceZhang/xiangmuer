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
<div style="left: 0px; position: absolute; top: 0px;font-size:20pt" >
<table width="1200" height="120" background="uploads/b3.jpg" align="center">
<tr>
<td align="center" valign="middle"class="one">��ҵ����ϵͳ����Ա����</td>
</tr>
</table>
</div>

<table width="100" height="300"  valign="middle" align="center" style=" position: absolute; top: 130px;font-size:20pt">
<tr>
<td><input type="button" class="two" onClick="transTo(1)" style="font-weight: bolder;border:0;background-color:#ffffff" value="ѧ����Ϣ����"></td>
</tr>
<tr>
<td><input type="button" class="two" onClick="transTo(2)" style="font-weight: bolder;border:0;background-color:#ffffff" value="��ʦ��Ϣ����"></td>
</tr>
<tr>
<td><input type="button" class="two" onClick="transTo(3)" style="font-weight: bolder;border:0;background-color:#ffffff" value="������Ϣ����"></td>
</tr>
<tr>
<td><input type="button" class="two" onClick="transTo(4)" style="font-weight: bolder;border:0;background-color:#ffffff" value="��������"></td>
</tr>
</table>

<div style="left: 200px; position: absolute; top: 130px;font-size:20pt" >
<iframe src="thesis_list.php" id="iframe4" scrolling="no" WIDTH="1000PX"HEIGHT="700PX" ></iframe>
</div>
<script>
	
		function $(id){
			return document.getElementById(id);
		}
	function transTo(n){
		if(n==1){$("iframe4").src="fbxt.php";}
		else if(n==2){$("iframe4").src="yselect.php";}
		else if(n==3){$("iframe4").src="thesis_list.php";}
		else if(n==4){$("iframe4").src="notice_add.php";}
		else{window.location.href='select.php';}
    }
</script>


