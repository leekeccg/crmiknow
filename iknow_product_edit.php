<?php require_once('Connections/conn.php'); ?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
    $updateSQL = sprintf("UPDATE crmtest_product SET category_id=%s, name=%s, creator_role_id=%s, create_time=%s, update_time=%s, category=%s, sortNum=%s, audio=%s, iknow=%s WHERE product_id=%s",
                         GetSQLValueString($_POST['category_id'], "int"),
                         GetSQLValueString($_POST['name'], "text"),
                         GetSQLValueString($_POST['creator_role_id'], "int"),
                         GetSQLValueString($_POST['create_time'], "int"),
                         GetSQLValueString($_POST['update_time'], "int"),
                         GetSQLValueString($_POST['category'], "text"),
                         GetSQLValueString($_POST['sortNum'], "text"),
                         GetSQLValueString($_POST['audio'], "text"),
                         GetSQLValueString($_POST['iknow'], "text"),
                         GetSQLValueString($_POST['product_id'], "int"));

    mysql_select_db($database_conn, $conn);
    $Result1 = mysql_query($updateSQL, $conn) or die(mysql_error());

    //$updateGoTo = "iknow_product_list.php?iknow_product_list=" . $row_DetailRS1['category_id'] . "";
    //  if (isset($_SERVER['QUERY_STRING'])) {
    //    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    //    $updateGoTo .= $_SERVER['QUERY_STRING'];
    //  }
    //  header(sprintf("Location: %s", $updateGoTo));
}

$colname_DetailRS1 = "-1";
if (isset($_GET['recordID'])) {
    $colname_DetailRS1 = $_GET['recordID'];
}
mysql_select_db($database_conn, $conn);
$query_DetailRS1 = sprintf("SELECT * FROM crmtest_product  WHERE product_id = %s", GetSQLValueString($colname_DetailRS1, "int"));
$DetailRS1 = mysql_query($query_DetailRS1, $conn) or die(mysql_error());
$row_DetailRS1 = mysql_fetch_assoc($DetailRS1);
$totalRows_DetailRS1 = mysql_num_rows($DetailRS1);
$title="Sentence Edit" ?>
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
        <br />
        <a class="btn btn-primary" href="iknow_product_list.php?recordID=<?php echo $row_DetailRS1['category_id'];?>" target="">Back</a>
        <br />
        <br />
        <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
            <table class="table table-bordered table-hover table-striped">
                <tr valign="baseline" class="none">
                    <td nowrap align="right">Product_id:</td>
                    <td>
                        <?php echo $row_DetailRS1['product_id']; ?>
                    </td>
                </tr>
                <tr valign="baseline" class="none">
                    <td nowrap align="right">Category_id:</td>
                    <td>
                        <input type="text" class="form-control" name="category_id" value="<?php echo htmlentities($row_DetailRS1['category_id'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline" class="">
                    <td nowrap align="right">Name:</td>
                    <td>
                        <div><?php echo $row_DetailRS1['name']; ?></div>
                        <input type="text" class="form-control" name="name" value="<?php echo htmlentities($row_DetailRS1['name'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline" class="none">
                    <td nowrap align="right">Creator_role_id:</td>
                    <td>
                        <input type="text" class="form-control" name="creator_role_id" value="<?php echo htmlentities($row_DetailRS1['creator_role_id'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline" class="none">
                    <td nowrap align="right">Create_time:</td>
                    <td>
                        <input type="text" class="form-control" name="create_time" value="<?php echo htmlentities($row_DetailRS1['create_time'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline" class="none">
                    <td nowrap align="right">Update_time:</td>
                    <td>
                        <input type="text" class="form-control" name="update_time" value="<?php echo htmlentities($row_DetailRS1['update_time'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline" class="none">
                    <td nowrap align="right">Category:</td>
                    <td>
                        <input type="text" class="form-control" name="category" value="<?php echo htmlentities($row_DetailRS1['category'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline" class="none">
                    <td nowrap align="right">SortNum:</td>
                    <td>
                        <input type="text" class="form-control" name="sortNum" value="<?php echo htmlentities($row_DetailRS1['sortNum'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline" class="">
                    <td nowrap align="right">Audio:</td>
                    <td>
                        <input type="text" class="form-control" name="audio" value="<?php echo htmlentities($row_DetailRS1['audio'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline" class="">
                    <td nowrap align="right">Iknow:</td>
                    <td>
                        <input type="text" class="form-control" name="iknow" value="<?php echo htmlentities($row_DetailRS1['iknow'], ENT_COMPAT, 'utf-8'); ?>" size="32" />
                    </td>
                </tr>
                <tr valign="baseline" class="">
                    <td nowrap align="right">&nbsp;</td>
                    <td>
                        <input type="submit" class="btn btn-primary" value="更新记录" />
                        <a class="btn btn-primary" href="iknow_product_edit.php?recordID=<?php echo $_GET['recordID']-1;?>" target="">Pre</a>
                        <a class="btn btn-primary" href="iknow_product_edit.php?recordID=<?php echo $_GET['recordID']+1;?>" target="">Next</a>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="MM_update" value="form1" />
            <input type="hidden" name="product_id" value="<?php echo $row_DetailRS1['product_id']; ?>" />
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
mysql_free_result($DetailRS1);
?>