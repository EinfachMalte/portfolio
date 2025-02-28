$(function () {
    $(document).on("click", ".menu-btn", function () {
        $("body").toggleClass("collapsed");
        $(this).toggleClass("fa-chevron-left");
        $(this).toggleClass("fa-chevron-right");
    });

    $("aside").on({
        mouseenter: function () {
            $("body").removeClass("collapsed");
        },
        mouseleave: function () {
            $("body").addClass("collapsed");
        },
    });
});
