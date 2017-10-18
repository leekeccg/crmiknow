<?php require_once('Connections/conn.php'); ?>
<?php
mysql_select_db($database_conn, $conn);
$query_Recordset1 = "SELECT * FROM iknow WHERE pid = 0";
$Recordset1 = mysql_query($query_Recordset1, $conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
 $title="Leeke" ?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
      <td>id</td>
      <td>title</td>
      <?php /*?><td>content1</td>
      <td>content2</td>
      <td>categoryid</td>
      <td>customer_id</td>
      <td>status</td><?php */?>
      <td>pid</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_Recordset1['id']; ?></td>
        <td><a href="iknow.php?pid=<?php echo $row_Recordset1['id']; ?>"><?php echo $row_Recordset1['title']; ?></a></td>
       <?php /*?> <td><?php echo $row_Recordset1['content1']; ?></td>
        <td><?php echo $row_Recordset1['content2']; ?></td>
        <td><?php echo $row_Recordset1['categoryid']; ?></td>
        <td><?php echo $row_Recordset1['customer_id']; ?></td>
        <td><?php echo $row_Recordset1['status']; ?></td><?php */?>
        <td><?php echo $row_Recordset1['pid']; ?></td>
      </tr>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  </table>
<!-- InstanceEndEditable --></div>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Recordset1);
?>
