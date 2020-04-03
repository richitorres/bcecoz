$( document ).ready(function() {
	// navbar cosas de navbar
    $('.moreInfoOption').click(function (e) {
        e.preventDefault();
        if ($("#moreinfoNav").is(":hidden")) {
            //console.log('hola1');
            $("#moreinfoNav").slideDown("slow");
            $(this).addClass('moreInfoOptionRotate');
        } else {
            //console.log('hola2');
            $("#moreinfoNav").slideUp("slow");
            $(this).removeClass('moreInfoOptionRotate');
        }
    });

    $('.moreInfoOption2').click(function (e) {
        e.preventDefault();
        if ($("#moreinfoNav2").is(":hidden")) {
            //console.log('hola1');
            $("#moreinfoNav2").slideDown("slow");
            $(this).addClass('moreInfoOptionRotate');
        } else {
            //console.log('hola2');
            $("#moreinfoNav2").slideUp("slow");
            $(this).removeClass('moreInfoOptionRotate');
        }
    });
    $('.moreInfoOption3').click(function (e) {
        e.preventDefault();
        if ($("#moreinfoNav3").is(":hidden")) {
            //console.log('hola1');
            $("#moreinfoNav3").slideDown("slow");
            $(this).addClass('moreInfoOptionRotate');
        } else {
            //console.log('hola2');
            $("#moreinfoNav3").slideUp("slow");
            $(this).removeClass('moreInfoOptionRotate');
        }
    });
    $('.moreInfoOption4').click(function (e) {
        e.preventDefault();
        if ($("#moreinfoNav4").is(":hidden")) {
            //console.log('hola1');
            $("#moreinfoNav4").slideDown("slow");
            $(this).addClass('moreInfoOptionRotate');
        } else {
            //console.log('hola2');
            $("#moreinfoNav4").slideUp("slow");
            $(this).removeClass('moreInfoOptionRotate');
        }
    });

    $(".navBarHome .hamburger").click(function () {
        $(this).toggleClass("is-active");
    });
    $("#mySidenav .hamburger").click(function () {
        $(".navBarHome .hamburger").removeClass("is-active");

    });
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
            $(".navBarHome").css("background-color" , "#fff");
            $(".navBarHome").attr("id","shadow");
            $(".navBarHome").removeClass("gradienteBlackTop");

            $(".navBarHome .navcontent .hamburger, .navBarHome .navcontent .img-luxury a.minium").addClass("blue");


        }

        else{
            $(".navBarHome").css("background-color" , "#fff");
            $(".navBarHome").removeAttr("id","shadow");
            $(".navBarHome").addClass("gradienteBlackTop");

            $(".navBarHome .navcontent .hamburger, .navBarHome .navcontent .img-luxury a.minium").addClass("blue");

        }
    });
});