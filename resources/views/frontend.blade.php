<!doctype html>
<html lang="en">

<head>
    <title>CRITYK</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   
@yield('before_styles')


    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/crytik/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/crytik/') }}/css/vendor/icon-sets.css">
    <link rel="stylesheet" href="{{ asset('vendor/crytik/') }}/css/main.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/crytik/') }}/css/demo.css">
    <link rel="stylesheet" href="{{ asset('vendor/crytik/') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('vendor/crytik/') }}/css/owl.theme.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/crytik/') }}/css/animate.css">


    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('vendor/crytik/') }}/images/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('vendor/crytik/') }}/images/favicon.png">



    @yield('after_styles')
</head>

<body class="overflow">

@include("layouts.header")

<div class="main-body">
    @yield('content')
</div>

@include("layouts.footer")

@yield('before_scripts')

<script src="{{ asset('vendor/crytik/') }}/js/jquery/jquery-2.1.0.min.js"></script>
<script src="{{ asset('vendor/crytik/') }}/js/owl.carousel.js"></script>
<script src="{{ asset('vendor/crytik/') }}/js/bootstrap/bootstrap.min.js"></script>
<script src="{{ asset('vendor/crytik/') }}/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('vendor/crytik/') }}/js/klorofil.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/crytik/') }}/js/wow.js"></script>


<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100,
            callback: function (box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
	
	wow1 = new WOW(
                      {
                      boxClass:     'wow1',      // default
                      animateClass: 'animated1', // default
                      offset:       100,          // default
                     
                    }
                    )
            // wow.init();
    wow.init();
	wow1.init();
    document.getElementById('moar').onclick = function () {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script>


<script type="text/javascript">
    $(document).ready(function () {


        var owl = $('#testimonial-slider');
        owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            nav: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: false
        });


        var owl = $('#blog-slider');
        owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: false,
            nav: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false
        });
	

        var owl = $('#blog-sliders');
        owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: false,
            nav: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false
        });


        var owl = $('#mobile-slider');
        owl.owlCarousel({
            items: 5,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false
        });


        var owl = $('#mobile-slider-responsive');
        owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            nav: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false
        });



    });


    $('.blogclick').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 2000);
                return false;
            }
        }
    });

    $(".img-icon a").hover(function () {
        imgurl = $(this).attr('data-src');
        $(".fet_img_url").attr("src", imgurl);
    });

    $(window).scroll(function () {
        var scrollTop = 80;
        if ($(window).scrollTop() >= scrollTop) {
            $(".header-top").css("border-bottom","1px solid #e0e0e0");
        }
        if ($(window).scrollTop() < scrollTop) {
            $(".header-top").css("border-bottom","0px solid #e0e0e0");
        }
    })

</script>

@yield('after_scripts')
</body>

</html>
