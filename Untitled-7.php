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
    <script src="http://127.0.0.1:8080/crmIknow/json/789707.js"></script>
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
        <div id="result"></div>
        <!-- 重命名，变成动态-->
        <!-- InstanceEndEditable -->
    </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd -->
<script>

                var obj = goalJSON;

function read(key, val) {
  if ($.isArray(val) || $.isPlainObject(val)) {
    for (var k in val) {
      if (key && !$.isNumeric(key) && k && !$.isNumeric(k)) {
        key += '_' + k;
 //       if (k == 'position') {
   //       key += '/' + val[k];
     //   }
      } else if (!$.isNumeric(k)) {
        key = k;
      }
      read(key, val[k])
    }
  } else {
    if (!values[key]) {
      values[key] = [];
    }
    values[key].push(val);
  }
}
</script>
<?php
$key='k == "item_id" || k=="item_id_type_cue_text"';
//$key='k != ""';
?>
<script>
    var iknow_id=789707;
    var customer_id=2;
var values = [];
read(null, obj)
var $table = $('<table class="table table-bordered table-hover table-striped">');
var $tr = $('<tr>');
    for (var k in values) {
        if (<?php echo $key;?>) {
            $th = $('<th>');
            $th.text(k);
            $tr.append($th);
        }
}
        $th = $('<th>');
            $th.text("iknow_id");
            $tr.append($th);
         $th = $('<th>');
            $th.text("customer_id");
            $tr.append($th);
$table.append($tr);
for (var key in values) {
  for (var i = 0; i < values[key].length; i++) {
    var $row = $('<tr>');
    for (var k in values) {
            if (<?php echo $key;?>) {
            $td = $('<td>');
            $td.text(values[k][i]);
            $row.append($td);
        }
    }
         $td = $('<td>');
            $td.text(iknow_id);
            $row.append($td);
        $td = $('<td>');
            $td.text(customer_id);
            $row.append($td);
    $table.append($row);
  }
  break;
}
$('#result').append($table);

</script>

</html>