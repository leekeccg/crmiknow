<?php require_once('Connections/conn.php'); ?><?php
$colname_DetailRS1 = "-1";
if (isset($_GET['recordID'])) {
  $colname_DetailRS1 = $_GET['recordID'];
}
mysql_select_db($database_conn, $conn);
$query_DetailRS1 = sprintf("SELECT * FROM iknow WHERE id = %s", GetSQLValueString($colname_DetailRS1, "int"));
$DetailRS1 = mysql_query($query_DetailRS1, $conn) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);
$totalRows_DetailRS1 = mysql_num_rows($DetailRS1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<table border="1" align="center">
  <tr>
    <td>id</td>
    <td><?php echo $row_DetailRS1['id']; ?></td>
  </tr>
  <tr>
    <td>content1</td>
    <td><?php echo $row_DetailRS1['content1']; ?></td>
  </tr>
  <tr>
    <td>content2</td>
    <td><?php echo $row_DetailRS1['content2']; ?></td>
  </tr>
  <tr>
    <td>title</td>
    <td><?php echo $row_DetailRS1['title']; ?></td>
  </tr>
  <tr>
    <td>categoryid</td>
    <td><?php echo $row_DetailRS1['categoryid']; ?></td>
  </tr>
</table>
</body>
</html><?php
mysql_free_result($DetailRS1);
?>