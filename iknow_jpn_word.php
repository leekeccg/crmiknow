<?php $title="iknow_jpn_word" ?>
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
    <!--<link rel="stylesheet" type="text/css" href="https://datatables.net/media/css/site.css?_=170d96f69db52446b9aa21d2653da1f4" />-->
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css" />-->
    <script type="text/javascript" src="https://datatables.net/media/js/site.js?_=864bfcf009a679ab8affaaf56e444759"></script>
    <script type="text/javascript" src="https://datatables.net/media/js/dynamic.php" async></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.min.js"></script>
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
        <!-- 输出 -->
        <div class="list">
            <div class="mbl">
                <a class="btn btn-primary" href="https://iknow.jp/custom/courses/<?php echo $_GET['iknow_id']; ?>/items" target="_blank">item</a>
                <a class="btn btn-primary" id="json_button" href="javascript:void(0)">JSON</a>
                <a class="btn btn-primary" id="datatable" href="javascript:void(0)">datatable</a>
                <a class="btn btn-primary" id="" href="?iknow_id=<?php echo $_GET['iknow_id']; ?>&page=sentence">Sentence</a>
            </div>
            <table class="table table-bordered table-hover table-striped" id="example">
                <thead>
                    <tr></tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

        <script>
            var getIknow =<?php echo $_GET['iknow_id']; ?>;
        </script>
        <?php
        $getPage="word";
        if(isset($_GET['page'])){
            $getPage=$_GET['page'];
        }
        if($getPage=="word"){$js_file="iknow_jpn_word";}
        if($getPage=="sentence"){$js_file="iknow_jpn_sentence";}
        ?>
        
        <script src="javascript/iknow/<?php echo $js_file; ?>.js"></script>
        <!-- InstanceEndEditable -->
    </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd -->
</html>
