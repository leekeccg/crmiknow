//$("#json_button").click(function () {
$.getJSON('json/' + getIknow, function (data) {
    var strVar = "";
    strVar += "<th>Sound<\/th>";
    strVar += "<th>Text<\/th>";
    strVar += "<th>transliteration<\/th>";
    strVar += "<th>part_of_speech<\/th>";
    strVar += "<th>response<\/th>";
    $(".list table thead tr").append(strVar);

    for (var i = 0; i < data.items.length; i++) { //items是字段

        var id = data.items[i].id;//ID
        var text = data.items[i].cue.content.text;//标题
        var sound = data.items[i].cue.content.sound;
        var cue = "";
        var transliteration = data.items[i].cue.related.transliterations[0].text;
        var response = data.items[i].response.content.text;
        //var speech =  "";
        var part_of_speech = data.items[i].cue.related.part_of_speech;//演讲
        var transcription = data.items[i].response.content.text;//演讲
        var left_text = data.items[i].response.content.text;//左边的文字
        var text0 = '';
        for (var j = 0; j < data.items[i].cue.related.sentences.length; j++) {
            var small_id = data.items[i].cue.related.sentences[j].id;
            var small_text = data.items[i].cue.related.sentences[j].text;
            text0 = text0 + '<div class="strip">' + small_id + '. ' + small_text + '</div>'
        }
        $(".list table tbody").append('<tr><td>' + sound + '</td><td>' + text + '</td><td>' + transliteration + '</td><td>' + part_of_speech + '</td><td>' + response + '</td></tr>');
        //$('.list table tbody').append("<tr><td class='bold'><div>"+i+'. '+text+"<div><div>"+transcription+"</div><span class='none'>"+part_of_speech+"</span></td><td id='item_"+id+"'></td><td>"+text0+"</td></tr>");
    }
});

//});
$("#json_button3").click(function () {
    $('#example').DataTable({
        "pageLength": 50
    });
});