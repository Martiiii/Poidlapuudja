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

    $('#eng').click(function () {
        $.ajax({
            type: "POST",
            url: "index.php/index/change_lang/",
            data: {value:'eng'}
        })

    });

    $('#est').click(function () {
        $.ajax({
            type: "POST",
            url: "index.php/index/change_lang/",
            data: {value:'est'}
        })

    });

    $('#regamisnupp').click(function(){
     
        $.ajax({

            type: "POST",

            url: "index.php/index/lisauudis/",
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