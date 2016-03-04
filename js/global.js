$(document).ready(function(){


    $('#closenupp').click(function(){
        var eesnimi = $('input#eesnimi').val();
        $.post('getname.php', {eesnimi: eesnimi}, function() {
            alert(data);
        }
        );


    });



});