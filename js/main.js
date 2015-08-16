$(document).ready(function() {
    $(".content-toggle_btn a").click(function() {
        $(this).parent().parent().parent().children(".content-toggle").slideToggle(500);
    });
});