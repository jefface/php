<?php 
  require_once("connMysql.php");
  if(!isset($_SESSION)){
   session_start();
}
  $sql = "SELECT * FROM supplier WHERE account='".$_SESSION["account"]."'";
  $record = mysql_query($sql);
  $row = mysql_fetch_assoc($record);
?>
<div align="center" >
  <p>會員名稱：<strong><?php echo $row["name"];?></strong></p>
  <p align="center">
    <a href="member_center.php">會員中心</a><br>
    <a href="member_update_form.php">修改會員資料</a><br>
    <a href="member_change_password_form.php">修改會員密碼</a><br>
    <a href="member_delete.php">刪除會員帳號</a><br>
    <a href="member_delete_form.php">新增商品</a><br>
    <a href="logout.php">登出系統</a><br>
  </p>
</div>