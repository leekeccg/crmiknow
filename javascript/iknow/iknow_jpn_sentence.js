$.getJSON('json/' + getIknow, function (data) {
    var strVar = "";
    strVar += "<th>item_id<\/th>";
    strVar += "<th>s_id<\/th>";
    strVar += "<th>s_item_id<\/th>";
    strVar += "<th>s_image<\/th>";
    strVar += "<th>s_sound<\/th>";
    strVar += "<th>s_text<\/th>";
    strVar += "<th>s_transliterations<\/th>";
    strVar += "<th>s_translations<\/th>";
    strVar += "";

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
            var s_id = data.items[i].cue.related.sentences[j].id;
            var s_item_id = data.items[i].cue.related.sentences[j].item_id;
            var s_image = data.items[i].cue.related.sentences[j].image;
            var s_sound = data.items[i].cue.related.sentences[j].sound;
            var s_text = data.items[i].cue.related.sentences[j].text;
            var s_transliterations = data.items[i].cue.related.sentences[j].transliterations[0].text;
            var s_translations = data.items[i].cue.related.sentences[j].translations[0].text;
            text0 = text0 + '<tr><td>' + id + '</td><td>'+ s_id + '</td><td>' + s_item_id + '</td><td>' + s_image + '</td><td>' + s_sound + '</td><td>' + s_text + '</td><td>' + s_transliterations + '</td><td>' + s_translations + '</td></tr>'
        }
        $(".list table tbody").append(text0);
        //$('.list table tbody').append("<tr><td class='bold'><div>"+i+'. '+text+"<div><div>"+transcription+"</div><span class='none'>"+part_of_speech+"</span></td><td id='item_"+id+"'></td><td>"+text0+"</td></tr>");
    }
});

//});
$("#datatable").click(function () {
    $('#example').DataTable({
        "pageLength": 50000
    });
});