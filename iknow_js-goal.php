<?php 
require_once('Connections/conn.php');
$colname_DetailRS1 = "-1";
if (isset($_GET['recordID'])) {
  $colname_DetailRS1 = $_GET['recordID'];
}
mysql_select_db($database_conn, $conn);
$query_DetailRS1 = sprintf("SELECT * FROM iknow WHERE id = %s", GetSQLValueString($colname_DetailRS1, "int"));
$DetailRS1 = mysql_query($query_DetailRS1, $conn) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);
$totalRows_DetailRS1 = mysql_num_rows($DetailRS1);
echo "var goalJSON=".$row_DetailRS1['content1'].";";
echo "var memoriesJOSN=".$row_DetailRS1['content2'].";";
mysql_free_result($DetailRS1);
?>