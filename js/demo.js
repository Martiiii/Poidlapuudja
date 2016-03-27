$(document).ready(function(){
    $('#faktinupp').click(function(){
        if ($('#soitekokku').is(':hidden')) {
            $('#soitekokku').removeClass('hidden');
            $('#kasutajaidkokku').removeClass('hidden');
        } else {
            $('#soitekokku').addClass('hidden');
            $('#kasutajaidkokku').addClass('hidden');
        }

    });

    $('#logout').click(function () {
        $.ajax({
            type: "POST",
            url: "index/logout/",
            success: function() {
                window.location.reload();
            }
        })

    });

    $('#eng').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEng/",
            success: function() {
                window.location.reload();
            }
        })

    });

    $('#est').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEst/",
            success: function() {
                window.location.reload();
            }

        })

    });

    $('#engout').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEng/",
            success: function(messageforyou)
            {

                window.location.href = "login/index2";

            }
        })

    });

    $('#estout').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEst/",
            success: function(messageforyou)
            {

                window.location.href = "login/index2";

            }

        })

    });

    $('#regamisnupp').click(function(){
     
        $.ajax({

            type: "POST",

            url: "index/lisauudis/",
            data: $("#regamine :input").serializeArray(),
            success: function(messageforyou)
            {

                $('#msgThankyou').fadeIn(600).delay(1000).fadeOut(1800);

            }

        });

    });

    $('#regamisnupp').click(function() {
        $('#modal').modal('hide');
    });



    $("#regamine").submit( function() {
        return false
    });


});