$(document).ready(function(){


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

    $("#regamine").submit( function() {
        return false
    });

});