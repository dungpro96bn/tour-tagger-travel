jQuery(function ($) {

    //Slider banner homepage
    $('.bannerSlider .sliderList-image').slick({
        autoplay: true,
        autoplaySpeed: 6000,
        infinite: true,
        dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 600
    });

    //Slider Vietnam tour
    $('#north .list-imageTour').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        // fade: true,
        dots: true,
        asNavFor: '#north .list-thumbnailTour',
        prevArrow:"<button type='button' class='slick-prev pull-left'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5.561\" height=\"9.707\" viewBox=\"0 0 5.561 9.707\">\n" +
            "  <path id=\"Path_957\" data-name=\"Path 957\" d=\"M1025.725,1702.412l-4.5,4.5,4.5,4.5\" transform=\"translate(-1020.518 -1702.058)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\"/>\n" +
            "</svg>\n</button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5.561\" height=\"9.707\" viewBox=\"0 0 5.561 9.707\">\n" +
            "  <path id=\"Path_958\" data-name=\"Path 958\" d=\"M1025.725,1702.412l-4.5,4.5,4.5,4.5\" transform=\"translate(1026.079 1711.765) rotate(180)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\"/>\n" +
            "</svg>\n</button>",
    });
    $('#north .list-thumbnailTour').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '#north .list-imageTour',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        infinite: false,
    });

    $('#central-south .list-imageTour').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        // fade: true,
        dots: true,
        asNavFor: '#central-south .list-thumbnailTour',
        prevArrow:"<button type='button' class='slick-prev pull-left'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5.561\" height=\"9.707\" viewBox=\"0 0 5.561 9.707\">\n" +
            "  <path id=\"Path_957\" data-name=\"Path 957\" d=\"M1025.725,1702.412l-4.5,4.5,4.5,4.5\" transform=\"translate(-1020.518 -1702.058)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\"/>\n" +
            "</svg>\n</button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5.561\" height=\"9.707\" viewBox=\"0 0 5.561 9.707\">\n" +
            "  <path id=\"Path_958\" data-name=\"Path 958\" d=\"M1025.725,1702.412l-4.5,4.5,4.5,4.5\" transform=\"translate(1026.079 1711.765) rotate(180)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\"/>\n" +
            "</svg>\n</button>",
    });
    $('#central-south .list-thumbnailTour').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '#central-south .list-imageTour',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        infinite: false,
    });

    $('#south .list-imageTour').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        // fade: true,
        dots: true,
        asNavFor: '#south .list-thumbnailTour',
        prevArrow:"<button type='button' class='slick-prev pull-left'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5.561\" height=\"9.707\" viewBox=\"0 0 5.561 9.707\">\n" +
            "  <path id=\"Path_957\" data-name=\"Path 957\" d=\"M1025.725,1702.412l-4.5,4.5,4.5,4.5\" transform=\"translate(-1020.518 -1702.058)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\"/>\n" +
            "</svg>\n</button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5.561\" height=\"9.707\" viewBox=\"0 0 5.561 9.707\">\n" +
            "  <path id=\"Path_958\" data-name=\"Path 958\" d=\"M1025.725,1702.412l-4.5,4.5,4.5,4.5\" transform=\"translate(1026.079 1711.765) rotate(180)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\"/>\n" +
            "</svg>\n</button>",
    });
    $('#south .list-thumbnailTour').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '#south .list-imageTour',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        infinite: false,
    });

    $('#southern-resort-area .list-imageTour').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        // fade: true,
        dots: true,
        asNavFor: '#southern-resort-area .list-thumbnailTour',
        prevArrow:"<button type='button' class='slick-prev pull-left'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5.561\" height=\"9.707\" viewBox=\"0 0 5.561 9.707\">\n" +
            "  <path id=\"Path_957\" data-name=\"Path 957\" d=\"M1025.725,1702.412l-4.5,4.5,4.5,4.5\" transform=\"translate(-1020.518 -1702.058)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\"/>\n" +
            "</svg>\n</button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5.561\" height=\"9.707\" viewBox=\"0 0 5.561 9.707\">\n" +
            "  <path id=\"Path_958\" data-name=\"Path 958\" d=\"M1025.725,1702.412l-4.5,4.5,4.5,4.5\" transform=\"translate(1026.079 1711.765) rotate(180)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\"/>\n" +
            "</svg>\n</button>",
    });
    $('#southern-resort-area .list-thumbnailTour').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '#southern-resort-area .list-imageTour',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        infinite: false,
    });

    $('.post-template .list-imageTour').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        // fade: true,
        dots: false,
        asNavFor: '.post-template .list-thumbnailTour',
        prevArrow:"<button type='button' class='slick-prev pull-left'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5.561\" height=\"9.707\" viewBox=\"0 0 5.561 9.707\">\n" +
            "  <path id=\"Path_957\" data-name=\"Path 957\" d=\"M1025.725,1702.412l-4.5,4.5,4.5,4.5\" transform=\"translate(-1020.518 -1702.058)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\"/>\n" +
            "</svg>\n</button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5.561\" height=\"9.707\" viewBox=\"0 0 5.561 9.707\">\n" +
            "  <path id=\"Path_958\" data-name=\"Path 958\" d=\"M1025.725,1702.412l-4.5,4.5,4.5,4.5\" transform=\"translate(1026.079 1711.765) rotate(180)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"1\"/>\n" +
            "</svg>\n</button>"
    });
    $('.post-template .list-thumbnailTour').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.post-template .list-imageTour',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        infinite: false,
    });


    //fade
    AOS.init({
        once: true,
        duration: 1000,
        delay: 0,
    });


    // Check submit contact complete
    setInterval(function () {
        if($(".mw_wp_form_confirm .wpcf7-form").hasClass("sent")){
            var strHref = window.location.href,
                href = strHref.replace('confirm/', '');
            $(".mw_wp_form_confirm .wpcf7-form").removeClass("sent");
            window.location.replace(href + 'complete/');
        }
    }, 100);

    $(".mw_wp_form_confirm .submit-form").click(function () {
        localStorage.setItem('sendmail', 'complete');
    });

    $(document).ready(function () {
        var checkItem1 = document.getElementsByClassName('contact-form-complete');
        var checkItem2 = document.getElementsByClassName('mw_wp_form_confirm');
        if(checkItem1.length <= 0 || checkItem2.length <= 0){
            localStorage.removeItem('sendmail');
        }
    });

    $(".link-top a").click(function () {
        localStorage.removeItem('sendmail');
    });


    //Open line box
    $("#line-contactBox .boxClose").click(function () {
        $("#line-contactBox").addClass("is-hide");
        $(".lineBox").removeClass("is-close");
    });
    $(".lineBox").click(function () {
        $("#line-contactBox").removeClass("is-hide");
        $(this).addClass("is-close");
    });


    //scroll
    $(function(){
        $('.scroll').click(function(event){
            event.preventDefault();
            var url = $(this).attr('href');
            var dest = url.split('#');var target = dest[1];
            var target_offset = $('#'+target).offset();
            var target_top = target_offset.top - 50;
            $('html, body').animate({scrollTop:target_top}, 500, 'swing');
            return false;
        });

        $('.locationItem a').click(function(event){
            event.preventDefault();
            var url = $(this).attr('href');
            var dest = url.split('#');
            var target = dest[1];
            $(".vietnam-tour .map-tour .locationItem a").removeClass("active");
            $(this).addClass("active");
            $("#vietnam-tour").attr("data-map", target);
            $(".vietnam-tour .tourInfo .tourInfo-item").removeClass("active");
            $('#'+target).addClass("active");
            $(".vietnam-tour .tourInfo .list-imageTour").slick("refresh");
        });
    });

    // page-top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('#page-top').addClass('is-open');
        } else {
            $('#page-top').removeClass('is-open');
        }
    });

    if ($(this).scrollTop() > 200) {
        $('#page-top').addClass('is-open');
    } else {
        $('#page-top').removeClass('is-open');
    }

    //Scroll page top
    $('#page-top a').click(function(event){
        event.preventDefault();
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });

    //Open Menu
    $("#header-menu .btn-openMenu").click(function () {
        $("body").toggleClass("header-open");
        $("#header-menu .header-megamenu").toggleClass("is-open");
        $(this).toggleClass("is-open");
        $("#header-menu").toggleClass("is-openMenu");
    });

    $(".bg-headerOpen").click(function () {
        $("body").toggleClass("header-open");
        $("#header-menu .header-megamenu").toggleClass("is-open");
        $("#header-menu").toggleClass("is-openMenu");
        $("#header-menu .btn-openMenu").toggleClass("is-open");
    });


    // Scroll header
    $(window).scroll( function(){
        if( $(this).scrollTop() > 200 ){
            $('#header-menu .header-nav').addClass('scroll-header');
            setTimeout(function(){
                $('#header-menu .header-nav').addClass('site-header--opening');
            },100);
        } else {
            $('#header-menu .header-nav').removeClass('scroll-header');
            $('#header-menu .header-nav').removeClass('site-header--opening');
        }
    });
    if($(this).scrollTop() > 200 ){
        $('#header-menu .header-nav').addClass('scroll-header');
        setTimeout(function(){
            $('#header-menu .header-nav').addClass('site-header--opening');
        },100);
    } else {
        $('#header-menu .header-nav').removeClass('scroll-header');
        $('#header-menu .header-nav').removeClass('site-header--opening');
    }

    $(window).on('scroll', function () {
        if($(window).width() < 1024){
            var ptop = $(".footer-bottom").offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > ptop - windowHeight) {
                $('#line-contactBox').fadeOut();
            } else {
                $('#line-contactBox').fadeIn();
            }
        }
    });


    $(".tab-action").click(function (event) {
        event.preventDefault();
        $(".post-template .tourContent-info").removeClass("active");
        $(".tab-action").removeClass("active");
        $(".guide-infoContent").removeClass("active");
        // $(".guide-infoContent *").removeClass("aos-init");
        // $(".guide-infoContent *").removeClass("aos-animate");
        $(this).parents(".hotel-colItem").find(".hotel-by-rating").removeClass("active");
        var url = $(this).attr('href');
        var dest = url.split('#');
        var target = dest[1];
        $('#'+target).addClass("active");
        $(this).addClass("active");
    });

    //pagination ajax
    var total = 1;
    $('.navigation-more a').click(function(e){
        e.preventDefault();
        total += 1;

        var dataMax = $(this).attr('data-max');
        if(total >= dataMax){
            $(this).addClass("is-stop");
        }

        $(this).addClass('is-loading');
        var classParents = $(this).parents('.hotel-by-rating').attr('data-class');

        var link = window.location;
        var urlPage = link + 'page/' + total;

        $.ajax({
            url: urlPage ,
            type:'GET',
            success: function(data){
                var thisHtml =  $(data).find('#'+classParents + ' .hotel_list');
                console.log(thisHtml);
                thisHtml.each(function(){
                    var a = $(this).html();
                    $('#'+classParents + ' .hotel_list').append(a);
                });
                $(".navigation-more a").removeClass('is-loading');
            }
        });
    });



});