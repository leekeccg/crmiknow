<?php $title="Leeke" ?>
<!DOCTYPE html>
<html lang="en" xmlns:spry="http://ns.adobe.com/spry"><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
<script src="SpryAssets/SpryData.js" type="text/javascript"></script>
<script src="SpryAssets/SpryHTMLDataSet.js" type="text/javascript"></script>
<script type="text/javascript">
var ds1 = new Spry.Data.HTMLDataSet("http://127.0.0.1:8080/crmIknow/iknow-json-table.php", "table");
</script>
<!-- InstanceEndEditable -->
</head>
<body>
<!-- inc_nav -->
<?php include("inc/inc_nav.php"); ?>
<div class="container"><!-- InstanceBeginEditable name="EditRegion1" -->
  <div spry:region="ds1">
    <table>
      <tr>
        <th spry:sort="item/id">Item/id</th>
        <th spry:sort="item/id/type">Item/id/type</th>
        <th spry:sort="item/id/type/cue/text">Item/id/type/cue/text</th>
        <th spry:sort="item/id/type/cue/text/image">Item/id/type/cue/text/image</th>
        <th spry:sort="item/id/type/cue/text/image/language">Item/id/type/cue/text/image/language</th>
        <th spry:sort="item/id/type/cue/text/image/language/part_of_speech">Item/id/type/cue/text/image/language/part_of_speech</th>
        <th spry:sort="item/id/type/cue/text/image/language/part_of_speech/transcription">Item/id/type/cue/text/image/language/part_of_speech/transcription</th>
        <th spry:sort="item/id/type/cue/response/text">Item/id/type/cue/response/text</th>
        <th spry:sort="item/id/type/cue/response/text/language">Item/id/type/cue/response/text/language</th>
        <th spry:sort="item/id/type/cue/response/text/language/transliterations/Hira">Item/id/type/cue/response/text/language/transliterations/Hira</th>
        <th spry:sort="item/id/type/cue/response/text/language/transliterations/Hira/Hrkt">Item/id/type/cue/response/text/language/transliterations/Hira/Hrkt</th>
        <th spry:sort="item/id/type/cue/response/text/language/transliterations/Hira/Hrkt/Latn">Item/id/type/cue/response/text/language/transliterations/Hira/Hrkt/Latn</th>
        <th spry:sort="item/position">Item/position</th>
        <th spry:sort="item/position/sound">Item/position/sound</th>
        <th spry:sort="item/position/sound/sentences/position">Item/position/sound/sentences/position</th>
        <th spry:sort="item/position/sound/sentences/position/cue/id">Item/position/sound/sentences/position/cue/id</th>
        <th spry:sort="item/position/sound/sentences/position/cue/id/language">Item/position/sound/sentences/position/cue/id/language</th>
        <th spry:sort="item/position/sound/sentences/position/cue/id/language/text">Item/position/sound/sentences/position/cue/id/language/text</th>
        <th spry:sort="item/position/sound/sentences/position/cue/response/id">Item/position/sound/sentences/position/cue/response/id</th>
        <th spry:sort="item/position/sound/sentences/position/cue/response/id/language">Item/position/sound/sentences/position/cue/response/id/language</th>
        <th spry:sort="item/position/sound/sentences/position/cue/response/id/language/text">Item/position/sound/sentences/position/cue/response/id/language/text</th>
        <th spry:sort="item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira">Item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira</th>
        <th spry:sort="item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira/Hrkt">Item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira/Hrkt</th>
        <th spry:sort="item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira/Hrkt/Latn">Item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira/Hrkt/Latn</th>
        <th spry:sort="item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira/Hrkt/Latn/Jpan">Item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira/Hrkt/Latn/Jpan</th>
        <th spry:sort="item/position/sound/sentences/position/cue/response/image">Item/position/sound/sentences/position/cue/response/image</th>
        <th spry:sort="item/position/sound/sentences/position/cue/response/image/sound">Item/position/sound/sentences/position/cue/response/image/sound</th>
        <th spry:sort="item/position/sound/sentences/annotation">Item/position/sound/sentences/annotation</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/text">Item/position/sound/sentences/annotation/distractors/cue/text</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/response/text">Item/position/sound/sentences/annotation/distractors/cue/response/text</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/language">Item/position/sound/sentences/annotation/distractors/cue/language</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/language/text">Item/position/sound/sentences/annotation/distractors/cue/language/text</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/language/text/transcription">Item/position/sound/sentences/annotation/distractors/cue/language/text/transcription</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/response/language">Item/position/sound/sentences/annotation/distractors/cue/response/language</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/response/language/text">Item/position/sound/sentences/annotation/distractors/cue/response/language/text</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/transcription">Item/position/sound/sentences/annotation/distractors/cue/transcription</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/transcription/language">Item/position/sound/sentences/annotation/distractors/cue/transcription/language</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/transcription/language/text">Item/position/sound/sentences/annotation/distractors/cue/transcription/language/text</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/language/transcription">Item/position/sound/sentences/annotation/distractors/cue/language/transcription</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/language/transcription/text">Item/position/sound/sentences/annotation/distractors/cue/language/transcription/text</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/text/language">Item/position/sound/sentences/annotation/distractors/cue/text/language</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/text/language/transcription">Item/position/sound/sentences/annotation/distractors/cue/text/language/transcription</th>
        <th spry:sort="item/position/sound/sentences/annotation/distractors/cue/response/text/language">Item/position/sound/sentences/annotation/distractors/cue/response/text/language</th>
      </tr>
      <tr spry:repeat="ds1">
        <td>{item/id}</td>
        <td>{item/id/type}</td>
        <td>{item/id/type/cue/text}</td>
        <td>{item/id/type/cue/text/image}</td>
        <td>{item/id/type/cue/text/image/language}</td>
        <td>{item/id/type/cue/text/image/language/part_of_speech}</td>
        <td>{item/id/type/cue/text/image/language/part_of_speech/transcription}</td>
        <td>{item/id/type/cue/response/text}</td>
        <td>{item/id/type/cue/response/text/language}</td>
        <td>{item/id/type/cue/response/text/language/transliterations/Hira}</td>
        <td>{item/id/type/cue/response/text/language/transliterations/Hira/Hrkt}</td>
        <td>{item/id/type/cue/response/text/language/transliterations/Hira/Hrkt/Latn}</td>
        <td>{item/position}</td>
        <td>{item/position/sound}</td>
        <td>{item/position/sound/sentences/position}</td>
        <td>{item/position/sound/sentences/position/cue/id}</td>
        <td>{item/position/sound/sentences/position/cue/id/language}</td>
        <td>{item/position/sound/sentences/position/cue/id/language/text}</td>
        <td>{item/position/sound/sentences/position/cue/response/id}</td>
        <td>{item/position/sound/sentences/position/cue/response/id/language}</td>
        <td>{item/position/sound/sentences/position/cue/response/id/language/text}</td>
        <td>{item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira}</td>
        <td>{item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira/Hrkt}</td>
        <td>{item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira/Hrkt/Latn}</td>
        <td>{item/position/sound/sentences/position/cue/response/id/language/text/transliterations/Hira/Hrkt/Latn/Jpan}</td>
        <td>{item/position/sound/sentences/position/cue/response/image}</td>
        <td>{item/position/sound/sentences/position/cue/response/image/sound}</td>
        <td>{item/position/sound/sentences/annotation}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/text}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/response/text}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/language}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/language/text}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/language/text/transcription}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/response/language}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/response/language/text}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/transcription}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/transcription/language}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/transcription/language/text}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/language/transcription}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/language/transcription/text}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/text/language}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/text/language/transcription}</td>
        <td>{item/position/sound/sentences/annotation/distractors/cue/response/text/language}</td>
      </tr>
    </table>
  </div>
  <h1><?php echo $title;?></h1>
<!-- InstanceEndEditable --></div>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd --></html>