<?php require_once('Connections/conn.php'); ?>
<?php

$colname_rs = "-1";
if (isset($_GET['pid'])) {
  $colname_rs = $_GET['pid'];
}
mysql_select_db($database_conn, $conn);
$query_rs = sprintf("SELECT * FROM iknow WHERE pid = %s order by sortNum asc", GetSQLValueString($colname_rs, "int"));
$rs = mysql_query($query_rs, $conn) or die(mysql_error());
$row_rs = mysql_fetch_assoc($rs);
$totalRows_rs = mysql_num_rows($rs);

$title="iknow.php" ?>
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
        <a class="btn btn-success mbm" href="iknow_successful.php" target="">Successful</a>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <td>id</td>
                <td>title</td>
                <td>categoryid</td>
                <td></td>
            </tr>
            <?php do { ?>
            <tr>
                <td>
                    <?php echo $row_rs['id']; ?>&nbsp;
                </td>
                <td>
                    <a href="iknow_update.php?recordID=<?php echo $row_rs['id']; ?>">
                        <?php echo $row_rs['title']; ?>&nbsp;
                    </a>
                    <a class="" href="iknow-export.php?iknow_id=<?php echo $row_rs['categoryid']; ?>&customer_id=<?php echo $row_rs['id']; ?>&title=<?php echo $row_rs['title']; ?>" target="_blank">Export</a>
                    <a class="" href="iknow_jpn_word.php?iknow_id=<?php echo $row_rs['categoryid']; ?>" target="_blank">JP JSON</a>
                    <a class="" href="iknow_eng_word.php?iknow_id=<?php echo $row_rs['categoryid']; ?>" target="_blank">ENG JSON</a>
                </td>
                <td>
                    <?php echo $row_rs['categoryid']; ?>&nbsp;
                </td>
                <td>
                    <a href="iknow_json_file.php?categoryid=<?php echo $row_rs['categoryid']; ?>" target="_blank">json</a>
                </td>
            </tr>
            <?php } while ($row_rs = mysql_fetch_assoc($rs)); ?>
        </table>
        <br />
        <?php echo $totalRows_rs ?> 记录 总数
        <a href="iknow_insert.php" class="btn btn-primary">insert</a><!-- InstanceEndEditable -->
    </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd -->
</html>
<?php
mysql_free_result($rs);
?>
