<?php 
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");
  //確認帳號是否已註冊
  $sql = "SELECT account FROM commodity WHERE name='".$_POST["name"]."'";
  $record = mysql_query($sql);
  if(mysql_num_rows($record)>0) {
    header("Location: commodity_join_form.php?registered=true&account=".$_POST["name"]);
  } else {
    //若此帳號尚未註冊，則執行新增的動作
    $sql = "INSERT INTO commodity (name, price, introduce, image) VALUES (";
    $sql .= "'".$_POST["name"]."',";
    $sql .= "'".$_POST["price"]."',";
    $sql .= "'".$_POST["introduce"]."',";
    $sql .= "'".$_POST["image"]."'";
    mysql_query($sql);
  }
?>
<script language="javascript">
  alert("加入成功。");
  window.location.href = "index.php";
</script>
