<?php 
session_start();
  header("Content-Type: text/html; charset=utf-8");
  require_once("login_check.php");
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>會員管理系統</title>
</head>
<body>
<table width="800" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr valign="top">
    <td>
        <p>歡迎光臨會員管理系統</p>
    	<p><font size="6" color="#FF0000">會員中心</font></p>
      <hr size="1" />
      <ol>
        <li>免費加入會員。</li>
        <li>會員可修改本身資料。</li>
        <li>會員可修改本身密碼。</li>
        <li>會員可刪除本身帳號。</li>
        
      </ol>
    </td>
     <td height="209" width="200" style="vertical-align:bottom;">
      <?php require_once("menu.php"); ?>
    </td>
  </tr>
  
</table>
</body>
</html>
