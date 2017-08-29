<header class="navbar-fixed-top header-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-section">

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 logo-adjuts">
                    <a href="#"><img src="{{ asset('vendor/crytik/') }}/images/logoPurple11.png"></a>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 pull-right menu_right">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding-right">

                        <nav class="navbar navbar-default front-menu">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed hamburger" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse padding-right" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
										<!--<li><a href="#">Home</a></li>-->
                                        <li class="{{ isActiveRoute('welcome') }}"><a href="{{ route('welcome') }}">About Us</a></li>
                                        <li><a href="#blog" class="blogclick">Blog</a></li>
                                        {{--<li><a href="{{URL::route('contact') }}">Contact</a></li>--}}

                                        <li class="{{ isActiveRoute('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
                                     
										<li><a href="#">Download</a></li>
                                     </ul>
                                </div><!-- /.navbar-collapse -->
								<button class="download-shortcut"><a href="#">Download</a></button>
                            </div><!-- /.container-fluid -->
                        </nav>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 social_links padding-leftright">
                        <ul>
                            <li><a href="https://www.facebook.com/crityk/" target="_blank"><img src="{{ asset('vendor/crytik/') }}/images/fb.svg"></a></li>
                            <li><a href="https://www.instagram.com/crityk/" target="_blank"><img src="{{ asset('vendor/crytik/') }}/images/int1.png"></a></li>
                            <li><a href="https://twitter.com/crityk1" target="_blank"><img src="{{ asset('vendor/crytik/') }}/images/tw.svg"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</header>
