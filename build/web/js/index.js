$(document) .ready(function(){
    $('.movie-poster') .mouseover(function(){
        var desc = $(this).attr('href');
        var left = $(this).position() .left;
        var top = $(this).position() .top;
        var width = $(this) .width();
        
        $('#desc_box') .css('top', top).css('left', left+width+10);
        $('#text').text(desc);
        $('#desc_box') .show();
    });
    
    $('.movie-poster') .mouseout(function(){
        $('#desc_box').hide();
        $('#desc').hide();
    });
    
    
    
});
    