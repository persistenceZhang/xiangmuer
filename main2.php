<?php
include_once("functions/is_login.php");
session_start();
?>
<html>
   <head>
      <title>毕业论文管理系统</title>
   </head>
<body background="uploads/14.jpg" text="black">
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
    .three{
         font-family:仿宋;
         font-size:24px;
         color:white;
      }
  </style>
<div style=" left: 120px; position: absolute; top:10px;">
    <center>
    <h1 class="one">老师个人中心</h1>
    </center>
<div style="left:10px; position: absolute; top:0px;font-size:20pt;font-family:隶书;">
<a href="logout.php" style='text-decoration:none;'>注销</a> <br> 
</div>
       <table  bgcolor="#46A3FF"width="1000" height="50"align="center">
       <tr>
      <td align="center"valign="middle"class="two"><a href="mai.php" style='text-decoration:none;'>个人信息</a></td>
      <td align="center"valign="middle"class="two"><a href="smai.php" style='text-decoration:none;'>最新动态</a></td>
      <td align="center"valign="middle"class="two"><a href="rmai.php" style='text-decoration:none;'>规章制度</a></td>
      <td align="center"valign="middle"class="two"><a href="" style='text-decoration:none;'>教学评价</a></td> 
      </tr>
    </table>
      <div style="left:0px; position: absolute; top:150px">
      <table bgcolor="#09619F" width="247" height="280"align="center">
      <tr>
      <td align="center" valign="middle" ><img src="uploads/1.png" height="50" width="50">
      </tr>
       <tr>
      <td align="center" valign="top" ><a href="grxx.php" style='text-decoration:none;'class="three">个人信息</a></td>
      </tr>
      </table>
      </div>
     <div style="left:250px; position: absolute; top:150px">
      <table bgcolor="#4FB5C7" width="150" height="280"align="center">
      <tr>
      <td align="center" valign="middle" ><img src="uploads/2.jpg" height="50" width="50">
      </tr>
       <tr>
      <td align="center"valign="top"><a href="select.php" style='text-decoration:none;'class="three">选题中心</a></td>
      </tr>
      </table>
      </div>
      <div style="left:403px; position: absolute; top:150px">
      <table bgcolor="#1978D8" width="240" height="140"align="center">
      <tr>
      <td align="center" valign="middle" ><img src="uploads/3.jpg" height="50" width="50">
      </tr>
       <tr>
      <td align="center"valign="top"><a href="thesis_list3.php" style='text-decoration:none;'class="three">学生论文</a></td>
       </tr>
      </table>
      </div>
      <div style="left:403px; position: absolute; top:295px">
      <table bgcolor="#90A8E3" width="240" height="135"align="center">
      <tr>
      <td align="center" valign="middle" ><img src="uploads/4.jpg" height="50" width="50">
      </tr>
       <tr>
      <td align="center"valign="top"><a href="progress_list2.php" style='text-decoration:none;'class="three">论文进度</a></td>
       </tr>
      </table>
      </div>
       <div style="right:3px; position: absolute; top:150px">
      <table bgcolor="#DB6987" width="350" height="140"align="center">
      <tr>
      <td align="center" valign="middle" ><img src="uploads/5.jpg" height="50" width="50">
      </tr>
       <tr>
      <td align="center"valign="top"><a href="excellent_list.php" style='text-decoration:none;'class="three">优秀论文</a></td>
      </tr>
      </table>
      </div>
      <div style="right:3px; position: absolute; top:295px">
      <table bgcolor="#90A8E3" width="350" height="135"align="center">
      <tr>
      <td align="center" valign="middle" ><img src="uploads/6.jpg" height="50" width="50">
      </tr>
       <tr>
      <td  align="center"valign="middle"><a href="lwjh.php" style='text-decoration:none;'class="three">论文计划</a></td>
      </tr>
      </table>
      </div>  
       <div style="left:0px; position: absolute; top:435px">
      <table bgcolor="#8E7AAA" width="120" height="150"align="center">
      <tr>
      <td align="center" valign="middle" ><img src="uploads/7.jpg" height="50" width="50">
      </tr>
       <tr>
      <td align="center"valign="middle"><a href="score_list.php" style='text-decoration:none;'class="three">论文成绩</a></td>
      </tr>
      </table>
      </div> 
      <div style="left:125px; position: absolute; top:435px">
      <table bgcolor="#187D9A" width="120" height="150"align="center">
      <tr>
      <td align="center" valign="middle" ><img src="uploads/8.jpg" height="50" width="50">
      </tr>
       <tr>
      <td align="center"valign="middle"><a href="evaluate_list.php" style='text-decoration:none;'class="three">导师评价</a></td>
       </tr>
      </table>
      </div>
      <div style="left:250px; position: absolute; top:435px">
      <table bgcolor="#A0CF41"width="150" height="150"align="center">
      <tr>
      <td align="center" valign="middle" ><img src="uploads/9.jpg" height="50" width="50">
      </tr>
       <tr>
      <td align="center"valign="middle"><a href="notice_list.php" style='text-decoration:none;'class="three">已收公告</a></td>
       </tr>
      </table>
      </div>
      <div style="left:405px; position: absolute; top:435px">
      <table bgcolor="#EAAF76" width="240" height="150"align="center">
      <tr>
      <td align="center" valign="middle" ><img src="uploads/10.jpg" height="50" width="50">
      </tr>
       <tr>
      <td align="center"valign="middle"><a href="information2.php" style='text-decoration:none;'class="three">互动交流</a></td>
       </tr>
      </table>
      </div>
      <div style="right:180px; position: absolute; top:435px">
      <table bgcolor="#88BAD9" width="170" height="150"align="center">
       <tr>
      <td align="center"valign="middle"><a href="xgmm.php" style='text-decoration:none;'class="three">修改密码</a></td>
       </tr>
      </table>
      </div>
      <div style="right:0px; position: absolute; top:435px">
      <table bgcolor="#09619F" width="175" height="150"align="center">
      <tr>
      <td align="center"valign="middle"><a href="xgxz.php" style='text-decoration:none;'class="three">相关下载</a></td>
       </tr>
      </table>
      </div>
 </body>
</html>
