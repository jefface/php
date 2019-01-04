<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>新增商品</title>
  <script language="javascript">
  function check_form() {
	  var acct = document.form1.account.value;
	  if(name=="") {		
		  alert("請填寫產品名稱!");
		  return false;
	  } 
		if(price=="") {		
		  alert("請填寫產品名稱!");
		  return false;
	  } 
	  if(introduce=="") {
		  alert("請填寫介紹!");
		  return false;
	  }
	  return confirm("確定送出？");
  }
  </script>
</head>
<body>
<table width="800" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr valign="top">
    <td width="600">
    	<form name="form1" method="post" action="commodity_join.php" onSubmit="return check_form();">
        <p><font size="6" color="#FF0000">新增商品</font></p>
		  	<?php if(isset($_GET["name"])){?>
          <div>帳號 <?php echo $_GET["name"];?> 已經有人使用！</div>
        <?php }?>
        <div>
          <hr size="1" />
          <p><strong>產品名稱</strong>：
          	<input type="text" name="name">
          	<font color="#FF0000">*</font>
          </p>
          <p><strong>產品價格</strong>：
            <input type="password" name="price">
            <font color="#FF0000">*</font>
          </p>
          <p><strong>介紹</strong>：
            <input type="password" name="introduce">
            <font color="#FF0000">*</font>
          </p>
          <p><strong>照片</strong>：
            <input type="text" name="image">
            <font color="#FF0000">*</font>
          </p>
          <p><font color="#FF0000">*</font> 表示為必填的欄位</p>
        </div>
        <hr size="1" />
        <p align="center">
          <input type="submit" name="join" value="加入會員">
          <input type="reset" name="reset" value="重設資料">
        </p>
      </form>
    </td>
  </tr>
</table>
</body>
</html>