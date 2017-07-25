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

$colname_Recordset1 = "-1";
if (isset($_GET['keyword'])) {
    $colname_Recordset1 = $_GET['keyword'];
}
mysql_select_db($database_conn, $conn);
$query_Recordset1 = sprintf("SELECT * FROM crmtest_business WHERE name LIKE %s", GetSQLValueString("%" . $colname_Recordset1 . "%", "text"));
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
