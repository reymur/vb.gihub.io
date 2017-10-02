
$(function(){

    //$('#calendar').fullCalendar({
    //    eventClick: function(calEvent, jsEvent, view){
    //        $(this).css('background-color', 'blue');
    //        $(this).css('color', 'white');
    //        //$.ajax({
    //        //    url: '/myroom',
    //        //    type: 'POST',
    //        //    data: { title_ajax: calEvent.title,  date_ajax: calEvent.date},
    //        //    headers: {
    //        //        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    //        //    },
    //        //    success: function(res){
    //        //        console.log(res);
    //        //    },
    //        //    error:  function(error){
    //        //        alert(error.responseText);
    //        //    }
    //        //});
    //        $("#text_db").dialog({
    //            buttons: [
    //                {
    //                    text: "sil",
    //                    click: function() {
    //                        location.reload();
    //                        $.ajax({
    //                            type: 'POST',
    //                            url: '/myroom',
    //                            data: {
    //                                event_ajax_title: calEvent.title,
    //                                event_ajax_date: calEvent.date
    //                            },
    //                            headers: {
    //                                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    //                            },
    //                            success: function(res){
    //                                console.log(res);
    //                            },
    //                            error:  function(res){
    //                                console.log(error);
    //                            }
    //                        });
    //                        $( this ).dialog( "close" );
    //                    }
    //                }
    //            ]
    //        });
    //
    //        if(calEvent.title == 'toy') {
    //            $("#ui-id-2").css('color', 'white');
    //            if(calEvent.text == '') {
    //                $("#ui-id-2").text(calEvent.date);
    //                $('#text_db_toy_title').text(calEvent.title);
    //            }
    //            else {
    //                $("#ui-id-2").css('color', 'white');
    //                $("#ui-id-2").text(calEvent.date);
    //                $("#text_db_toy_title").text('Toy').css('color', 'red');
    //                $("#text_db_toy_text").text(calEvent.text);
    //            }
    //
    //        }
    //        else if(calEvent.title == 'qeyd') {
    //            $("#ui-id-2").css('color', 'white');
    //            if(calEvent.text == '') {
    //                $("#ui-id-2").text(calEvent.date);
    //                $('#text_db_qeyd_title').text(calEvent.title);
    //            }
    //            else {
    //                $("#ui-id-2").css('color', 'white');
    //                $("#ui-id-2").text(calEvent.date);
    //                $("#text_db_qeyd_title").text('Qeyd').css('color', 'green');
    //                $("#text_db_qeyd_text").text(calEvent.text);
    //            }
    //        }
    //    },
    //    eventMouseover: function(event,jsEvent,view){
    //
    //        $(this).css('background-color', 'gray', 'hover');
    //        //alert(event);
    //        //$.ajax({
    //        //    type: 'POST',
    //        //    data: {e_width: w, e_height: h},
    //        //    success: function(res){
    //        //        console.log(res);
    //        //    },
    //        //    error: function(){
    //        //        alert('Width_error');
    //        //    }
    //        //});
    //    },
    //    eventMouseout: function(event,jsEvent,view){
    //
    //        if(event.title == 'toy') $(this).css('background-color','#cc0000');
    //        else if(event.title == 'qeyd') $(this).css('background-color','#0EB62A');
    //    },
    //    dayClick: function(date, jsEvent, view){
    //        var clickDate = date.format();
    //        $('#date').val(clickDate);
    //        $("#date_text").text(clickDate);
    //        $(this).css('background-color', 'red');
    //        $('#dialog').dialog('open');
    //        $('#send').click(function(){
    //            var alias = $('input:radio:checked').val();
    //            var name = $('#name').val();
    //            var text = $('#text').val();
    //            var send = $('#send').val();
    //            location.reload();
    //            $.ajax({
    //                url: '/myroom',
    //                type: 'POST',
    //                headers: {
    //                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    //                },
    //                data: {
    //                    alias: alias,
    //                    name: name,
    //                    send: send,
    //                    text: text,
    //                    dates: clickDate
    //                },
    //
    //                success: function(res){
    //                    console.log(res);
    //                },
    //                error: function(error){
    //                    console.log(error);
    //                }
    //            });
    //
    //        });
    //
    //    },
    //
    //    theme: true,
    //    eventSources: [
    //        {
    //            events: events1,
    //            color: "#cc0000",
    //            textColor: "#fff"
    //        },
    //        {
    //            events: events2,
    //            color: "#0EB62A"
    //        },
    //        {
    //            events: events3
    //        }
    //    ],
    //    monthNames: [
    //        'Yanvar','Fevral','Mart','Aprel','May', 'Iyun','Iyul',
    //        'Avqust','Sentyabr','Oktyabr','Noyabr','Dekabr'
    //    ],
    //    monthNamesShort: [
    //        'Yan','Fev','Mar','Apr','May', 'Iyn','Iyl',
    //        'Avq','Sen','Okt','Noy','Dek'
    //    ],
    //    dayNames: [
    //        'Bazar ertəsi','Çərşənbə axşamı','Çərşənbə','Cümə axşami','Cümə','Şənbə','Bazar'
    //    ],
    //    dayNamesShort: ['Ber','Çax','Çər','Cax','Cüm','Şən','Br'
    //    ]
    //
    //});
    //
    //$('#dialog').dialog({
    //
    //    width:260,
    //    autoOpen: false,
    //    show: {
    //        effect: 'drop',
    //        duration: 500
    //    },
    //    hide: {
    //        effect: 'clip',
    //        duration: 500
    //    }
    //});

    //LOGIN MODAL FORM

    $('#login').bind('click', function(){
        $( "#modern_form" ).dialog({
            autoOpen: true,
            dialogClass: "no-close",
            buttons: [
                {
                    text: "OK",
                    click: function() {
                        $( this ).dialog( "close" );
                    }
                }
            ],
            width: 250,
            top:30
        });
    });

    //TABS
    $( "#accordion" ).accordion({
        collapsible: true
    });

});


//function autoPlayYouTubeModal() {
//    var trigger = $("body").find('[data-toggle="modal"]');
//    trigger.click(function () {
//        var theModal = $(this).data("target"),
//            videoSRC = $(this).attr("data-theVideo"),
//            videoSRCauto = videoSRC + "?autoplay=1";
//        $(theModal + ' iframe').attr('src', videoSRCauto);
//        $(theModal + ' button.close').click(function () {
//            $(theModal + ' iframe').attr('src', videoSRC);
//        });
//    });
//}




