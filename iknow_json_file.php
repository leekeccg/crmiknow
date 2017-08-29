<?php $title="Leeke" ?>
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
        <?php
        //is set
        if($_GET['categoryid']<>""){
            $path="D:/wwwroot/crmIknow/json/";
            if (!is_dir($path)){
                mkdir($path,0777);
            }
            $content = "var goalJSON = [];";
            $fileJSON = $path.$_GET['categoryid'].".json";
            $fileJS = $path.$_GET['categoryid'].".js";
            rename($path.$_GET['categoryid'].".json", $path.$_GET['categoryid'].".json".date("Y-m-d H-i-s"));
            rename($path.$_GET['categoryid'].".js", $path.$_GET['categoryid'].".js".date("Y-m-d H-i-s"));
            file_put_contents($fileJSON,"",FILE_APPEND);
            file_put_contents($fileJS,$content,FILE_APPEND);
        }
        ?>
        <input value="D:\wwwroot\crmIknow\json" type="text" class="form-control" />
        <input value="<?php echo $_GET['categoryid']; ?>" type="text" class="form-control" />
        <a class="btn btn-primary" href="http://iknow.jp/custom/courses/<?php echo $_GET['categoryid'];?>/items" target="_blank">Go To Iknow</a>
        <!-- InstanceEndEditable -->
    </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd -->
</html>