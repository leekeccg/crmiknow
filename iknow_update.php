<?php require_once('Connections/conn.php'); ?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
    $updateSQL = sprintf("UPDATE iknow SET content1=%s, content2=%s, title=%s, categoryid=%s, customer_id=%s WHERE id=%s",
                         GetSQLValueString($_POST['content1'], "text"),
                         GetSQLValueString($_POST['content2'], "text"),
                         GetSQLValueString($_POST['title'], "text"),
                         GetSQLValueString($_POST['categoryid'], "int"),
                         GetSQLValueString($_POST['customer_id'], "int"),
                         GetSQLValueString($_POST['id'], "int"));

    mysql_select_db($database_conn, $conn);
    $Result1 = mysql_query($updateSQL, $conn) or die(mysql_error());

    $updateGoTo = "iknow_update.php";
    if (isset($_SERVER['QUERY_STRING'])) {
        $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
        $updateGoTo .= $_SERVER['QUERY_STRING'];
    }
    header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['recordID'])) {
    $colname_Recordset1 = $_GET['recordID'];
}
mysql_select_db($database_conn, $conn);
$query_Recordset1 = sprintf("SELECT * FROM iknow WHERE id = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
$title="Leeke" ?>
<!DOCTYPE html>
<html lang="en">
<!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>
        <?php echo $title;?>
    </title>
    <!-- InstanceEndEditable -->
    <!-- inc_head -->
    <?php include("inc/inc_head.php"); ?>
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>
<body>
    <!-- inc_nav -->
    <?php include("inc/inc_nav.php"); ?>
    <div class="container">
        <!-- InstanceBeginEditable name="EditRegion1" -->
        <h1>
            <?php echo $title;?>
        </h1>
        <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
            <table class="table table-bordered table-hover table-striped">
                <tr valign="baseline" class="none">
                    <td nowrap align="right">Id:</td>
                    <td>
                        <?php echo $row_Recordset1['id']; ?>
                    </td>
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">Title:</td>
                    <td>
                        <input type="text" name="title" value="<?php echo htmlentities($row_Recordset1['title'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">Content1:</td>
                    <td>
                        <textarea name="content1" class="form-control" cols="32">
                            <?php echo htmlentities($row_Recordset1['content1'], ENT_COMPAT, 'utf-8'); ?>
                        </textarea>
                    </td>
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">Content2:</td>
                    <td>
                        <input type="text" name="content2" value="<?php echo htmlentities($row_Recordset1['content2'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>

                <tr valign="baseline">
                    <td nowrap align="right">Categoryid:</td>
                    <td>
                        <input type="text" name="categoryid" value="<?php echo $row_Recordset1['categoryid']; ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">customer_id:</td>
                    <td>
                        <input type="text" name="customer_id" value="<?php echo $row_Recordset1['customer_id']; ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline">
                    <td nowrap align="right">&nbsp;</td>
                    <td>
                        <input type="submit" value="更新记录" />
                    </td>
                </tr>
            </table>
            <input type="hidden" name="MM_update" value="form1" />
            <input type="hidden" name="id" value="<?php echo $row_Recordset1['id']; ?>" />
            <a class="btn btn-primary" target="_blank" href="http://127.0.0.1:8080/crmTest/index.php?m=customer&a=add">add crm</a>
            <a class="btn btn-primary" href="iknow-json-table.php?iknow_id=<?php echo $row_Recordset1['categoryid']; ?>">table</a>
            <a class="btn btn-primary" href="iknow-export.php?iknow_id=<?php echo $row_Recordset1['categoryid']; ?>&customer_id=<?php echo $row_Recordset1['customer_id']; ?>" target="_blank">Export</a>
        </form>
        <p>&nbsp;</p>
        <!-- InstanceEndEditable -->
    </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd -->
</html>
<?php
mysql_free_result($Recordset1);
?>
