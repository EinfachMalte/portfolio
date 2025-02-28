$(function () {
    $(document).on("click", ".menu-btn", function () {
        $("body").toggleClass("collapsed");
        $(this).toggleClass("fa-chevron-left");
        $(this).toggleClass("fa-chevron-right");
    });

    $("aside").on({
        mouseenter: function () {
            $("body").removeClass("collapsed");
            $(".menu-btn").toggleClass("fa-chevron-left");
            $(".menu-btn").toggleClass("fa-chevron-right");
        },
        mouseleave: function () {
            $("body").addClass("collapsed");
            $(".menu-btn").toggleClass("fa-chevron-left");
            $(".menu-btn").toggleClass("fa-chevron-right");
        },
    });
});
