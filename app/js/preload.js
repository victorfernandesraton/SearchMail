    $(window).ready(function() {
        $(".preloader").fadeOut(3000, function(){
            $(this).css({visibility : 'collapse'});
        });
        $(".preloader").delay(1000).fadeOut("slow");
    });
