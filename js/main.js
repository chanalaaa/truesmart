$(document).ready(function() {
    //initial set
    if ($(window).width() <= 1000) {
        $time = 0;
    } else if ($(window).width() > 1000) {
        $time = 500;
    }

    $(window).resize(function() {
        if ($(window).width() <= 1000) {
            $time = 0;
        } else {
            $time = 500;
        }
    });

    $bool = 1;
    $roll = 0;
    $(".content-toggle_btn a").click(function() {

        $(this).parent().parent().parent().children(".content-toggle").slideToggle($time);
        /*
              for mobile device
              -device need to reduce animate for prevention of out of ram problem.
          */

          $(this).children("img").toggleClass('rotate');

    });
});
