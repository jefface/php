<?php 
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");
  //確認帳號是否已註冊
  $sql = "SELECT account FROM supplier WHERE account='".$_POST["account"]."'";
  $record = mysql_query($sql);
  if(mysql_num_rows($record)>0) {
    header("Location: member_join_form.php?registered=true&account=".$_POST["account"]);
  } else {
    //若此帳號尚未註冊，則執行新增的動作
    $sql = "INSERT INTO supplier (name, address, account, telephone, password) VALUES (";
    $sql .= "'".$_POST["name"]."',";
    $sql .= "'".$_POST["account"]."',";
    $sql .= "'".$_POST["password1"]."',";
    $sql .= "'".$_POST["telephone"]."',";
    $sql .= "'".$_POST["address"]."')";
    mysql_query($sql);
  }
?>
<script language="javascript">
  alert("註冊成功\n請用申請的帳號密碼登入。");
  window.location.href = "index.php";
</script>
