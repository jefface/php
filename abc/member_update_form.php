<?php 
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");
  session_start();
  //檢查是否已登入
  require_once("login_check.php");
  //查詢登入會員資料
  $sql = "SELECT * FROM supplier WHERE account='".$_SESSION["account"]."'";
  $record = mysql_query($sql);	
  $row = mysql_fetch_assoc($record);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員管理系統</title>
<script language="javascript">
function check_form() {
  if(document.form1.name.value=="") {
    alert("請填寫姓名!");
    return false;
  }
  return confirm('確定送出嗎？');
}
</script>
</head>
<body>
<table width="800" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr valign="top">
    <td width="600">
      <form action="member_update.php" method="POST" name="form1" onSubmit="return check_form();">
        <p><font size="6" color="#FF0000">修改會員資料</font></p>
        <div>
          <hr size="1" />
          <p><strong>使用帳號</strong>：
            <input name="account" type"text" value="<?php echo $row["account"];?>" disabled="true">
            <font color="#FF0000">*</font>
          </p>
          <p><strong>公司名號</strong>：
            <input name="name" type="text" value="<?php echo $row["name"];?>">
            <font color="#FF0000">*</font>
          </p>
          <p><strong>電　　話</strong>：
            <input name="telephone" type="text" value="<?php echo $row["telephone"];?>">
          </p>
          <p><strong>住　　址</strong>：
            <input name="address" type="text" value="<?php echo $row["address"];?>" size="40">
          </p>
          <p><strong>電子郵件</strong>：
            <input name="email" type="text" value="<?php echo $row["email"];?>">
          </p>
          <p><strong>備註</strong>：<br>
          	<textarea name="memo" cols="50" rows="5"><?php echo $row["memo"];?></textarea>
          </p>          
          <p><font color="#FF0000">*</font> 表示為必填的欄位</p>
        </div>
        <hr size="1" />
        <p align="center">
          <input name="id" type="hidden" value="<?php echo $row["s_id"];?>">
          <input type="submit" name="update" value="修改資料">
          <input type="reset" name="reset" value="重設資料">
        </p>
      </form>
    </td>
    <td width="200">
      <?php require_once("menu.php"); ?>
    </td>
  </tr>
</table>
</body>
</html>
