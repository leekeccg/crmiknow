<?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_DetailRS1 = "-1";
if (isset($_GET['recordID'])) {
  $colname_DetailRS1 = $_GET['recordID'];
}
mysql_select_db($database_conn, $conn);
$query_DetailRS1 = sprintf("SELECT * FROM crmtest_product_category WHERE category_id = %s", GetSQLValueString($colname_DetailRS1, "int"));
$DetailRS1 = mysql_query($query_DetailRS1, $conn) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);
$totalRows_DetailRS1 = mysql_num_rows($DetailRS1);

$colname_rsProduct = "-1";
if (isset($_GET['recordID'])) {
  $colname_rsProduct = $_GET['recordID'];
}
mysql_select_db($database_conn, $conn);
$query_rsProduct = sprintf("SELECT * FROM crmtest_product WHERE category_id = %s order by sortNum", GetSQLValueString($colname_rsProduct, "int"));
$rsProduct = mysql_query($query_rsProduct, $conn) or die(mysql_error());
$row_rsProduct = mysql_fetch_assoc($rsProduct);
$totalRows_rsProduct = mysql_num_rows($rsProduct);
 $title="Leeke" ?>
<!DOCTYPE html>
<html lang="en">
<!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $title;?></title>
<!-- InstanceEndEditable -->
<!-- inc_head -->
<?php include("inc/inc_head.php"); ?>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<!-- inc_nav -->
<?php include("inc/inc_nav.php"); ?>
<div class="container"><!-- InstanceBeginEditable name="EditRegion1" -->
  <h1><?php echo $title;?></h1>
  <table class="table table-bordered table-hover table-striped">
    <tr>
      <td>category_id</td>
      <td><?php echo $row_DetailRS1['category_id']; ?></td>
    </tr>
    <tr>
      <td><br>
        <?php echo $totalRows_rsProduct ?> 记录 总数
        parent_id</td>
      <td><?php echo $row_DetailRS1['parent_id']; ?></td>
    </tr>
    <tr>
      <td>name</td>
      <td><?php echo $row_DetailRS1['name']; ?></td>
    </tr>
    <tr>
      <td>description</td>
      <td><?php echo $row_DetailRS1['description']; ?></td>
    </tr>
  </table>
  <table class="table table-bordered table-hover table-striped">
    <tr>
      <td>product_id</td>
      <td>category_id</td>
      <td>name</td>
      <!--<td>creator_role_id</td>
      <td>create_time</td>
      <td>update_time</td>
      <td>category</td>
      <td>sortNum</td>
      <td>audio</td>
      <td>iknow</td>-->
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_rsProduct['product_id']; ?>&nbsp; </td>
        <td><?php echo $row_rsProduct['category_id']; ?>&nbsp; </td>
        <td><a href="iknow_product_edit.php?recordID=<?php echo $row_rsProduct['product_id']; ?>"> <?php echo $row_rsProduct['name']; ?>&nbsp; </a></td>
        <!--<td><?php echo $row_rsProduct['creator_role_id']; ?>&nbsp; </td>
        <td><?php echo $row_rsProduct['create_time']; ?>&nbsp; </td>
        <td><?php echo $row_rsProduct['update_time']; ?>&nbsp; </td>
        <td><?php echo $row_rsProduct['category']; ?>&nbsp; </td>
        <td><?php echo $row_rsProduct['sortNum']; ?>&nbsp; </td>
        <td><?php echo $row_rsProduct['audio']; ?>&nbsp; </td>
        <td><?php echo $row_rsProduct['iknow']; ?>&nbsp; </td>-->
      </tr>
      <?php } while ($row_rsProduct = mysql_fetch_assoc($rsProduct)); ?>
  </table>
  <!-- InstanceEndEditable --></div>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd -->
</html>
<?php
mysql_free_result($DetailRS1);

mysql_free_result($rsProduct);
?>