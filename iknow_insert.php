<?php require_once('Connections/conn.php'); ?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO iknow (id, content1, content2, title, categoryid) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['id'], "int"),
                       GetSQLValueString($_POST['content1'], "text"),
                       GetSQLValueString($_POST['content2'], "text"),
                       GetSQLValueString($_POST['title'], "text"),
                       GetSQLValueString($_POST['categoryid'], "int"));

  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($insertSQL, $conn) or die(mysql_error());

  $insertGoTo = "iknow.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
$title="iknow_insert" ?>
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
  <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
      <table class="table table-bordered table-hover table-striped">
          <tr valign="baseline" class="none">
              <td nowrap align="right">Id:</td>
              <td>
                  <input type="text" class="form-control" name="id" value="" size="32" />
              </td>
          </tr>
          <tr valign="baseline" class="none">
              <td nowrap align="right">Content1:</td>
              <td>
                  <input type="text" class="form-control" name="content1" value="" size="32" />
              </td>
          </tr>
          <tr valign="baseline" class="none">
              <td nowrap align="right">Content2:</td>
              <td>
                  <input type="text" class="form-control" name="content2" value="" size="32" />
              </td>
          </tr>
          <tr valign="baseline" class="">
              <td nowrap align="right">Title:</td>
              <td>
                  <input type="text" class="form-control" name="title" value="" size="32" />
              </td>
          </tr>
          <tr valign="baseline" class="">
              <td nowrap align="right">Categoryid:</td>
              <td>
                  <input type="text" class="form-control" name="categoryid" value="" size="32" />
              </td>
          </tr>
          <tr valign="baseline" class="">
              <td nowrap align="right">&nbsp;</td>
              <td>
                  <input type="submit" class="btn btn-primary" value="插入记录" />
                  <a class="btn btn-primary" href="https://iknow.jp/home" target="_blank">iknow</a>
              </td>
          </tr>
      </table>
    <input type="hidden" name="MM_insert" value="form1">
  </form>
  <p>&nbsp;</p>
  <!-- InstanceEndEditable --></div>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd -->
</html>