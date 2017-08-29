<?php $title="iknow_jpn_sentence" ?>
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
            <a class="btn btn-primary" href="https://iknow.jp/custom/courses/799963/items" target="_blank">item</a>
            <a class="btn btn-primary" id="json_button" href="javascript:void(0)">JSON</a>
            <a class="btn btn-primary" id="json_button2" href="javascript:void(0)">P</a>
            <a class="btn btn-primary" id="json_button3" href="javascript:void(0)"></a>
            <table class="table table-bordered table-hover table-striped" id="example">
                <thead>
                    <tr>
                        <th>s_id</th>
                        <th>s_item_id</th>
                        <th>s_image</th>
                        <th>s_sound</th>
                        <th>s_text</th>
                        <th>s_transliterations</th>
                        <th>s_translations</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>


        <script src="jquery.min.js"></script>
        <script>
$("#json_button").click(function(){
    $.getJSON('json/799963', function(data){
	   for (var i=0;i<data.items.length; i++) { //items是字段

	   		var id=data.items[i].id;//ID
                    var text = data.items[i].cue.content.text;//标题
                    var sound = data.items[i].cue.content.sound;
                    var cue = "";
                    var transliteration = data.items[i].cue.related.transliterations[0].text;
                    var response = data.items[i].response.content.text;
                    //var speech =  "";
                    var part_of_speech = data.items[i].cue.related.part_of_speech;//演讲
                       var transcription=data.items[i].response.content.text;//演讲
	   		var left_text=data.items[i].response.content.text;//左边的文字
	   		var text0='';
	   		for (var j=0;j<data.items[i].cue.related.sentences.length;j++){
                var s_id = data.items[i].cue.related.sentences[j].id;
                var s_item_id = data.items[i].cue.related.sentences[j].item_id;
                var s_image = data.items[i].cue.related.sentences[j].image;
                var s_sound = data.items[i].cue.related.sentences[j].sound;
                var s_text = data.items[i].cue.related.sentences[j].text;
                var s_transliterations = data.items[i].cue.related.sentences[j].transliterations[0].text;
                var s_translations=data.items[i].cue.related.sentences[j].translations[0].text;
	   			text0=text0+'<tr><td>' + s_id + '</td><td>' + s_item_id + '</td><td>' + s_image + '</td><td>' + s_sound + '</td><td>' + s_text + '</td><td>' + s_transliterations + '</td><td>' + s_translations + '</td></tr>'
                    }
                    $(".list table tbody").append(text0);
	   	//$('.list table tbody').append("<tr><td class='bold'><div>"+i+'. '+text+"<div><div>"+transcription+"</div><span class='none'>"+part_of_speech+"</span></td><td id='item_"+id+"'></td><td>"+text0+"</td></tr>");
	   }
	});

            });
            $("#json_button2").click(function () {
                $.getJSON('json/800440_memories', function (data) {
                for (var i = 0; i < data.length; i++) { //items是字段
                    var content_id = data[i].content_id;
                    //alert(data[i].progress);
                    $("#item_" + content_id).append(data[i].progress);
                    console.log();
                }
            });});
        </script>
        <script>
                    $("#json_button3").click(function () {
                        $('#example').DataTable({
                                        "pageLength": 50
                        });
} );
        </script>
        <!-- InstanceEndEditable -->
    </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd -->
</html>
