

$(document).ready(function(){


    $('.card').on('click', function() {
        $('.card').toggleClass('flipped');
    });
    $('#flipButton').on('click', function() {
        $('.card').toggleClass('flipped');
    });


    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        $('.fader, .slogan').stop().animate(
            {opacity: (( 1140-scroll )/100)+0.1},
            "slow"
        );
    });

});

