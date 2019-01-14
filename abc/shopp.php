<?php
$sql = "SELECT * FROM commodity" ;
$record = mysql_query($sql);
$row = mysql_fetch_assoc($record);
echo $row;
?>