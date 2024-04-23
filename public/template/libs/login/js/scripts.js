$('.form-group').each(function(){
    var $label,
        $input,
        $that = $(this);

   

    $label = $that.find('label');
    $input = $that.find('.form-control');

    // console.log(label);

    // label.addClass('active');

    if($input.val()) {
        $that.addClass('active');
    }

    $input.focus(function(){
        $that.addClass('active');
    });

    $input.blur(function(){
        // console.log($input.val());
        if(!$input.val()) {
            $that.removeClass('active');
        }
    });
});






$(document).ready(function(){
    
    $('#youtube-video').YTPlayer({
        fitToBackground: true,
        videoId: $('#youtube-video').data('video-id'),
        events: {
            'onReady' : onPlayerReady
        }
    });

    function onPlayerReady() {
        var player = $('#youtube-video').data('ytPlayer').player;
        player.mute();
    };
});