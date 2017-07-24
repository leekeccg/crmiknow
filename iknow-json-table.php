<?php $title="iknow-json-table" ?>
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
    <style>
        #result tr,
        th,
        td {
            border: 1px solid;
        }
    </style>
    <script src="http://127.0.0.1:8080/crmIknow/json/<?php echo $_GET['iknow_id']?>.js"></script>
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
        // if (k == 'position') {
        //  key += '/' + val[k];
        // }
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

var values = [];
read(null, obj)
var $table = $('<table>');
var $tr = $('<tr>');
for (var key in values) {
  $th = $('<th>');
  $th.text(key);
  $tr.append($th);
}
$table.append($tr);
for (var key in values) {
  for (var i = 0; i < values[key].length; i++) {
    var $row = $('<tr>');
    for (var k in values) {
      $td = $('<td>');
      $td.text(values[k][i]);
      $row.append($td);
    }
    $table.append($row);
  }
  break;
}
$('#result').append($table);

</script>

</html>