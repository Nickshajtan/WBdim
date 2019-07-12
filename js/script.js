jQuery(document).ready(function($) {
    //Anchors
    width = $(window).width();
    if(width < 1025 ){
        $("#anchor").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top - 60;
            $('body,html').animate({scrollTop: top}, 1500);
        });
        //Mobile menu
        $('.burger-block .burger-button').click(function(){
            $('header').toggleClass('menu-opened');
            $('.overlay').toggleClass('on');
            $('.mobile-logo').toggleClass('mobile');
            $('.burger-block').toggleClass('bg-col');
        });
        $(' .menu-item-has-children').click(function(){
            $(this).toggleClass('mobile');
            $(this).siblings().removeClass('mobile');
        });
        $('.overlay').click(function(){
            $('#youtube-popup').empty();
            $("#youtube-popup").css({'visibility':'hidden','opacity':'0'});
            $('header').removeClass('menu-opened');
            $('.burger-block').removeClass('bg-col');
            $('.overlay').removeClass('on');
            $('.mobile-logo').removeClass('mobile');
        });
    }
    if(width > 1025 ){
        $("#anchor").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });
    }
    //Mobile tabs
       if(width < 901 ){
        $('.tab-pane').css({display: 'none'});
        $("ul.nav-tabs").on("click","a.nav-link", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href');
            $('.tab-pane').css({display: 'none'});
            $(id).css({display: 'block'});
        });
    }
    //Slider
    $('#slider').slick({
                    infinite: true,
                    slidesToScroll: 1,
                    slidesToShow: 1,
                    arrows: true,
                    dots: false,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    pauseOnHover: true,
                    lazyLoad: 'ondemand',
                    fade: true,
                    cssEase: 'linear',
//                    prevArrow: $('.prev'),
//                    nextArrow: $('.next')
    });
    $('.slick-arrow').css({'display':''});
    $('button.btn-link').addClass('collapsed');
    $('#myTab li:first a').addClass('active');
    //Video
        $('.youtube-pop').click(function(e){
    	e.preventDefault();
    	var $this = $(this);
    	var $iframe = $("<iframe allowfullscreen>").attr("src", $this.data("link"));
    	$('#youtube-popup').empty();
    	$("#youtube-popup").append($iframe);
    	$('.overlay').addClass('on');
    	$("#youtube-popup").css({'visibility':'visible','opacity':'1'});
    });
    $('.overlay.on').click(function(e){
        e.preventDefault();
        $(this).removeClass('on');
        $("#youtube-popup").css({'visibility':'hidden','opacity':'0'});
    });
});