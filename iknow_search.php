<?php require_once('Connections/conn.php'); ?>
<?php
$colname_Recordset1 = "-1";
if (isset($_GET['keyword'])) {
    $colname_Recordset1 = $_GET['keyword'];
}
mysql_select_db($database_conn, $conn);
$query_Recordset1 = sprintf("SELECT crmtest_business.*, crmtest_customer.name as iknowname
FROM crmtest_business , crmtest_customer
WHERE crmtest_customer.customer_id = crmtest_business.customer_id
and crmtest_business.name LIKE %s", GetSQLValueString("%" . $colname_Recordset1 . "%", "text"));
$Recordset1 = mysql_query($query_Recordset1, $conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
$title="iknow_search" ?>
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
        <form class="form-inline" action="" method="get">
            <div class="form-group">
                <label for="exampleInputName2">Keyword</label>
                <input type="text" class="form-control" value="<?php echo $_GET['keyword']?>" name="keyword" />
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <br />
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <td>business_id</td>
                <td>name</td>
                <!--<td>item_id</td>-->
                <td>iknow_id</td>
                <td></td>
            </tr>
            <?php do { ?>
            <tr>
                <td>
                    <?php echo $row_Recordset1['business_id']; ?>
                </td>
                <td>
                    <a target="_blank" href="http://dict.youdao.com/w/<?php echo $row_Recordset1['name']; ?>">
                        <?php echo $row_Recordset1['name']; ?>
                    </a>
                </td>
                <!--<td><?php echo $row_Recordset1['item_id']; ?></td>-->
                <td>
                    <a href="http://iknow.jp/custom/courses/<?php echo $row_Recordset1['iknow_id']; ?>#!/" target="_blank">
                        <?php echo $row_Recordset1['iknow_id']; ?>
                    </a>
                    <input type="hidden" value="http://iknow.jp/custom/courses/<?php echo $row_Recordset1['iknow_id']; ?>#!/" class="form-control" />
                </td>
                <td><?php echo $row_Recordset1['iknowname'];?></td>
            </tr>
            <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
        </table>
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
