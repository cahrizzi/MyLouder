$(document).ready(function () {
    $("#page-loader").delay(3000).slideUp(1000);

    $("#btn-menu").on("click", function () {
        $("#menu-exp").addClass("menu-expandido", 1000);
        $("#menu-exp").removeClass("hidden", 1000);
    });

    $("#btn-close-menu").on("click", function () {
        $("#menu-exp").removeClass("menu-expandido", 1000);
        $("#menu-exp").addClass("hidden", 1000);
    });


    //    $("#mobile-home").delay(5000).slideUp(1000);

    $(".call-txt").click(function () {
        $(".txt-conteudo").toggle();
    });
});
