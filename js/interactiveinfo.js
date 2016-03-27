/**
 * Created by Uiks on 27.03.2016.
 */
$(document).ready(function() {
    $('.btn').mousemove(function(e){
            var hovertext = $(this).attr('data-hinttext');
            $('#hintbox').text(hovertext).show();
            $('#hintbox').css('top', e.clientY+20).css('left', e.clientX);})
        .mouseout(function(){
            $('#hintbox').hide();
        });
    
    $('.pedekas').mousemove(function(e){
            var hovertext = $(this).attr('data-hinttext');
            $('#hintbox').text(hovertext).show();
            $('#hintbox').css('top',e.clientY+15).css('left', e.clientX-1060);})
        .mouseout(function(){
            $('#hintbox').hide();
        });

});