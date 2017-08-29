@extends('frontend')

@section('content')


<!--<head><meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/></head><!-->
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 like-food text-center padding-leftright">
            <!-- h2>WE KNOW YOU LIKE FOOD</h2>
            <h1>GOOD NEWS! FOOD LIKES YOU TOO</h1> -->
            <b><p>DISCOVER <a href="#">WHAT TO EAT,</a><br> NOT JUST WHERE TO EAT.</p></b>
            <ul>
                <li><a href="https://itunes.apple.com/ca/app/crityk-food-finder-app-be/id1082259659?mt=8" target="_blank"><button><img src="{{ asset('vendor/crytik/') }}/images/apple.svg">App Store</button></a></li>
                <li><a href="#" target="_blank"><button><img src="{{ asset('vendor/crytik/') }}/images/google-play.svg">Google Play</button></a></li>
            </ul>
            <p class="arrow_top wow slideInLeft"  data-wow-duration="1500ms"><img src="{{ asset('vendor/crytik/') }}/images/download_now_arrow.png"></p>
			<p class="arrow_top arrow_top1 wow1 slideInRight"  data-wow-duration="1500ms" ><img src="{{ asset('vendor/crytik/') }}/images/arrow_comingsoon.png"></p>
		</div>
    </div>




    <div class="container-fluid mobile_slider">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-leftright">
            <div class="row hundrend-img">
                <div id="mobile-slider" class="owl-carousel">


                    <div>
                        <img src="{{ asset('vendor/crytik/') }}/images/img11.png">
                    </div>
                    <div>
                        <img src="{{ asset('vendor/crytik/') }}/images/img22.png">
                    </div>
                    <div>
                        <img src="{{ asset('vendor/crytik/') }}/images/img33.png">
                    </div>
                    <div>
                        <img src="{{ asset('vendor/crytik/') }}/images/img44.png">
                    </div>
                    <div>
                        <img src="{{ asset('vendor/crytik/') }}/images/img55.png">
                    </div>



                </div>
            </div>

        </div>
    </div>


    <div class="container-fluid mobile_featured_img">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-leftright">

            <div class="row text-center mobile_frame">
                <div class="carousal-div">

                    <div id="mobile-slider-responsive" class="owl-carousel">
                        <div>
                            <img src="{{ asset('vendor/crytik/') }}/images/img_3.png">
                        </div>
                        <div>
                            <img src="{{ asset('vendor/crytik/') }}/images/img_4.png">
                        </div>
                        <div>
                            <img src="{{ asset('vendor/crytik/') }}/images/img_5.png">
                        </div>
                        <div>
                            <img src="{{ asset('vendor/crytik/') }}/images/img_1.png">
                        </div>
                        <div>
                            <img src="{{ asset('vendor/crytik/') }}/images/img_2.png">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--
    <div class="container-fluid video-bg">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-leftright">
                <div id="videoDiv">
                    <div id="videoBlock">
    <!--<video preload="preload" id="video" autoplay="autoplay" loop="loop" control>
    <video id="video">
        <source src="http://benkaminski.com/wp-content/themes/coffee-cream-sugar/img/header-video.mp4" type="video/mp4"/>
        <source src="http://benkaminski.com/wp-content/themes/coffee-cream-sugar/img/header-video.ogv" type="video/ogg"/>
        <source src="http://benkaminski.com/wp-content/themes/coffee-cream-sugar/img/header-video.webm" type="video/webm"/>
    </video>
</div>
</div>
</div>
</div>
</div>-->

    <div class="container-fluid video-text">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 sevensixeight text-center col-lg-offset-2 col-md-offset-2 padding-leftright">
                        <h3>What is Crityk?</h3>
                        <p>
                            <strong>Crityk</strong> isn’t just another social food app. It’s a community that celebrates the love of food.
                            If you’ve been wishing there was an easier way to find great food that meets your palate or diet,
                            thats us! Are you a social foodie butterfly that enjoys snaping, rating, and sharing their discoveries? Yup,
                            that’s us too! Crityk is your magic genie lamp, and your voice to the foodie world.
                        </p>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">
                            <img src="{{ asset('vendor/crytik/') }}/images/play.svg">
                        </a>


                        <div class="modal fade innerdeal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>

                                    <div class="modal-body">

                                        <iframe src="https://player.vimeo.com/video/189868823"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                                    </div>
                                </div>
                            </div>




                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mycont_adj">
        <div class="container">
            <div class="row secret_section_bg secret_section">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text_my_left text-center">
                    <h3 class="desktop_panel">Our Secret Sauce</h3>
                    <h3 class="mobile_panel">Our<br /> Secret Sauce</h3>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="text-center first_panel">

                        <div class="first_child">
                            <div class="text-center img-icon">

                                <a href="javascript:void(0)" data-src="{{ asset('vendor/crytik/') }}/images/discover_desktop.png">
                                    <div class="hover_img"></div>
                                    <img src="{{ asset('vendor/crytik/') }}/images/globe.svg" alt="">
                                    <h6>Discover What to Eat</h6>
                                    <p>
                                        Sure it’s great to know where to eat, but that’s only half the battle. Know what to eat before you get it, and
                                        discover the world of food in a different way.
                                    </p>
                                </a>

                            </div>

                            <div class="hideimg"><img src="{{ asset('vendor/crytik/') }}/images/Discover_Eat.png"></div>
                        </div>

                        <div class="second_child">
                            <div class="text-center img-icon">
                                <a href="javascript:void(0)" data-src="{{ asset('vendor/crytik/') }}/images/filter_desktop.png">
                                    <div class="hover_img"></div>
                                    <img src="{{ asset('vendor/crytik/') }}/images/bars.svg" alt="">
                                    <h6>Get Palate & Diet Specific</h6>
                                    <p>
                                        Is there a part of your palate or diet that is grumbling for something specific? We got you covered like paleo vegan
                                        cheese on gluten free macaroni.
                                    </p>
                                </a>

                            </div>
                            <div class="hideimg"><img src="{{ asset('vendor/crytik/') }}/images/Get_Plate.png"></div>
                        </div>

                    </div>
                    <div class="text-center fet_img">
                        <img src="{{ asset('vendor/crytik/') }}/images/discover_desktop.png" alt="" class="fet_img_url">
                    </div>
                    <div class="text-center first_panel">

                        <div class="third_child">
                            <div class="text-center img-icon">
                                <a href="javascript:void(0)" data-src="{{ asset('vendor/crytik/') }}/images/snap_desktop.png">
                                    <div class="hover_img"></div>
                                    <img src="{{ asset('vendor/crytik/') }}/images/camera.svg" alt="">
                                    <h6>Snap & Rate</h6>
                                    <p>
                                        Snap & speak foodie! Our rating system makes it easy… snap, rate, and tag details about your food experiences.
                                    </p>
                                </a>

                            </div>

                            <div class="hideimg"><img src="{{ asset('vendor/crytik/') }}/images/iPhone-7-Silver2.png"></div>
                        </div>

                        <div class="fourth_child">
                            <div class="text-center img-icon">
                                <a href="javascript:void(0)" data-src="{{ asset('vendor/crytik/') }}/images/stash_desktop.png">
                                    <div class="hover_img"></div>
                                    <img src="{{ asset('vendor/crytik/') }}/images/plus-icon.svg" alt="">
                                    <h6>Stash & Share</h6>
                                    <p>
                                        See a delight or spot you like? Stash it for later. Then of course, because sharing is caring, share those
                                        findings with friends in-app or via social media.
                                    </p>
                                </a>
                            </div>

                            <div class="hideimg"><img src="{{ asset('vendor/crytik/') }}/images/iPhone-7-Silver3.png"></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid testtimonial-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 if_food">
                        <h1>
                            IF FOOD COULD TALK…
                        </h1>
                        <h2>
                            IF FOOD<br />COULD<br />TALK…
                        </h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right text-center">


                        <div id="testimonial-slider" class="owl-carousel">
                            <div class="testimonial">
                                <img src="{{ asset('vendor/crytik/') }}/images/quote.png" alt="">
                                <p>"Penne for your thoughts."</p>
                                <label>– Penne</label>
                            </div>

                            <div class="testimonial">

                                <img src="{{ asset('vendor/crytik/') }}/images/quote.png" alt="">
                                <p>"I own you"</p>
                                <label>– Coffee</label>
                            </div>

                            <div class="testimonial">

                                <img src="{{ asset('vendor/crytik/') }}/images/quote.png" alt="">
                                <p>“I’m good even when I’m bad.”</p>
                                <label>– Pizza</label>
                            </div>

                            <div class="testimonial">

                                <img src="{{ asset('vendor/crytik/') }}/images/quote.png" alt="">
                                <p>“Trust me, you can sing and dance."</p>
                                <label>– Margarita</label>
                            </div>

                            <div class="testimonial">

                                <img src="{{ asset('vendor/crytik/') }}/images/quote.png" alt="">
                                <p>“If at first you donut suceed, fry, fry again.”</p>
                                <label>– Donut</label>
                            </div>
                            <div class="testimonial">

                                <img src="{{ asset('vendor/crytik/') }}/images/quote.png" alt="">
                                <p>“Nobody has to know.”</p>
                                <label>– Dessert</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="blog"></div>

    <div class="container">
        <div class="row blog_bg">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h3>Our Blog</h3>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-full-part">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <?php
                    $xml = simplexml_load_file('https://medium.com/feed/crityk', null, LIBXML_NOCDATA);

                    foreach ($xml->channel->item as $item){
//print_r($item);



                        $title = (string) $item->title[0];
                        $link = (string) $item->link;
                        $content = $item->children('content', 'http://purl.org/rss/1.0/modules/content/');
                        $creator = $item->children('dc', 'http://purl.org/rss/1.0/modules/content/');

//                        echo $creator;
                        $html_string = $content->encoded;
                        $html_string1 = $creator->creator;
                        $dom = new DOMDocument();
                        libxml_use_internal_errors(true);
                        $dom->loadHTML($html_string);
                        libxml_clear_errors();
                        $img = $dom->getElementsByTagName('img')->item(0)->getAttribute('src');

                        $link1='https://medium.com/crityk/food-for-thought-613d4f17e0d9?source=rss----33926c69d887---4';

                        $link2='https://medium.com/crityk/go-fig-your-way-to-some-speechless-cuisine-c49bbdff12e4';

                        $img1='https://cdn-images-1.medium.com/max/1024/1*l7F70TsL2k6ZwMHQT2M_Pw.jpeg';

                        $img2='https://cdn-images-1.medium.com/max/1024/1*LxpSnS0M6DCAoqJ4hED5ig@2x.jpeg';



                    } ?>


                    <div class="img-blog">
                        <a href="{{URL::to($link1)}}" target="_blank">  <img src="{{ $img1 }}"></a>
                    </div>

                    <div class="img-hover">


                        {{--<h5>  {{$title}}</h5>--}}


                        <h5>  Food For Thought</h5>
                       <img src="{{ asset('vendor/crytik/') }}/images/small-img-blog.png">
                        {{--<img src="{{ $creator}}">--}}
                        <p>{{$creator}}</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="img-blog">
                        <a href="{{URL::to($link2)}}" target="_blank">  <img src="{{ $img2 }}"></a>
                    </div>
                    <div class="img-hover">
                        <h5>Go “Fig” your way to some speechless cuisine.</h5>
                        <img src="{{ asset('vendor/crytik/') }}/images/small-img-blog.png">
                        {{--<p>John Kegel</p>--}}

                        <p>{{$creator}}</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">


                    <div class="img-blog">
                        <a href="{{URL::to($link)}}" target="_blank">   <img src="{{ $img}}"></a>
                    </div>
                    <div class="img-hover">
                        <h5>  {{$title}}</h5>
                        <img src="{{ asset('vendor/crytik/') }}/images/small-img-blog.png">
                        {{--<p>John Kegel</p>--}}

                        <p>{{$creator}}</p>
                    </div>

                </div>

            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 all-posts text-center">
                <a href="https://medium.com/crityk" target="_blank">All posts</a>
            </div>

        </div>
    </div>

    <!--<div class="container-fluid slider_bg">
        <div class="container">

            <div class="row slider_in_bg">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 follow_our">

                    <div id="blog-slider" class="owl-carousel">
                        <div class="testimonial">
                            <img src="assets/img/blog_img.png">
                            <h5>Follow Our Blog</h5>
                            <p>Get foodie with some of the best food bloggers we know</p>
                        </div>
                        <div class="testimonial">
                            <img src="assets/img/blog_img.png">
                            <h5>Follow Our Blog</h5>
                            <p>Get foodie with some of the best food bloggers we know</p>
                        </div>
                        <div class="testimonial">
                            <img src="assets/img/blog_img.png">
                            <h5>Follow Our Blog</h5>
                            <p>Get foodie with some of the best food bloggers we know</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 follow_our">


                    <div id="blog-sliders" class="owl-carousel">

                        <div class="testimonial">
                            <img src="assets/img/kung_fodie.png">
                            <h5>Are you a Kung Foodie?</h5>
                            <p>Apply to be a part of our Crityk VIP</p>
                        </div>
                        <div class="testimonial">
                            <img src="assets/img/kung_fodie.png">
                            <h5>Are you a Kung Foodie?</h5>
                            <p>Apply to be a part of our Crityk VIP</p>
                        </div>
                        <div class="testimonial">
                            <img src="assets/img/kung_fodie.png">
                            <h5>Are you a Kung Foodie?</h5>
                            <p>Apply to be a part of our Crityk VIP</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    -->



    <div class="container-fluid unlease-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pull-right">
                        <h1>Unleash your foodie side</h1>
                        <p>
                            Start discovering food in a different way,<br /> and invite your friends to drool with you.<br /> Be a Crityk.
                        </p>
                        <ul>
                            <li><a href="https://itunes.apple.com/ca/app/crityk-food-finder-app-be/id1082259659?mt=8" target="_blank"><img src="{{ asset('vendor/crytik/') }}/images/ios.png"></a></li>
                            <li><a href="#" target="_blank"><img src="{{ asset('vendor/crytik/') }}/images/appstore1.png"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection