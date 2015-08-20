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
    //$roll = 180;
    $(".content-toggle_btn a").click(function() {
        $(this).parent().parent().parent().children(".content-toggle").slideToggle($time);
        /*
              for mobile device
              -device need to reduce animate for prevention of out of ram problem.
          */

        if ($bool == 1) {
            $(this).children("img").css({
               // "-ms-transform": "rotate("+$roll+"deg)",
               "-ms-transform": "rotate(180deg)",
                "-webkit-transform:": "rotate(180deg)",
                "transform": "rotate(180deg)"
            });
            $bool = 0;
        } else {
            $(this).children("img").css({
                "-ms-transform": "rotate(0deg)",
                "-webkit-transform:": "rotate(0deg)",
                "transform": "rotate(0deg)"
            });

            $bool = 1;
        }

    });
});
