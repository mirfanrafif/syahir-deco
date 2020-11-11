<!-- Header start -->
@extends('templates.welcome-template')

@section('title', 'Welcome Page')

@section('content')

<!--/ Header end -->

<!-- Slider start -->
<section class="hero-slider text-center">
    <div class="slider-inner h-100">
        <div class="slider-item" data-dot="&lt;i class=&quot;fa fa-bicycle&quot;&gt;&lt;/i&gt; Invent"
            style="background-image: url(images/slider/bg1.jpg);">
            <div class="overlay2">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <h2 data-duration-in=".3" data-animation-in="fadeInUp">Need To Invent The Future!
                            </h2>
                            <h3 class="mb-4" data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".4">We
                                Making Difference To Great Things Possible</h3>
                            <a href="#0" class="btn btn-primary white m-2" data-duration-in=".5"
                                data-animation-in="fadeInUp" data-delay-in=".5">Start Now</a>
                            <a href="#0" class="btn btn-primary solid m-2" data-duration-in=".6"
                                data-animation-in="fadeInUp" data-delay-in=".6">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Slider end -->

<!-- Service box start -->
<section id="service" class="service angle">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
                <h2 class="title">Layanan Kami
                    <span class="title-desc">
                        A Quality Experience Team with 4 years experience
                    </span>
                </h2>
            </div>
        </div><!-- Title row end -->

        <div class="row">
            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
                <div class="service-content text-center">
                    <span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
                    <h3>Web Design</h3>
                    <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid
                        befor</p>
                </div>
            </div>
            <!--/ End first service -->

            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
                <div class="service-content text-center">
                    <span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
                    <h3>Apps Development</h3>
                    <p>Food truck master cleanse mixtape minim Portland, cardigan stumptown chambray swag</p>
                </div>
            </div>
            <!--/ End Second service -->

            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
                <div class="service-content text-center">
                    <span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
                    <h3>eCommerce Websites</h3>
                    <p>Neutra Thundercats craft beer, listicle meggings bicycle rights 90's XOXO beard cardiga
                    </p>
                </div>
            </div>
            <!--/ End Third service -->

            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
                <div class="service-content text-center">
                    <span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
                    <h3>Design for Startups</h3>
                    <p>We design beautiful modern engaging websites that always latest responsive technologies.
                    </p>
                </div>
            </div>
            <!--/ End 4th service -->
        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ Service box end -->

<!-- Portfolio start -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic float-left"><i class="fa fa-suitcase"></i></span>
                <h2 class="title classic">Galeri Kami</h2>
            </div>
        </div> <!-- Title row end -->

        <!--Isotope filter start -->
        <div class="row text-right">
            <div class="col-12">
                <div class="isotope-nav" data-isotope-nav="isotope">
                    <ul>
                        <li><a href="#" class="active" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".web-design">Web Design</a></li>
                        <li><a href="#" data-filter=".development">Development</a></li>
                        <li><a href="#" data-filter=".joomla">Joomla</a></li>
                        <li><a href="#" data-filter=".wordpress">Wordpress</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- Isotope filter end -->
    </div>

    <div class="container-fluid">
        <div class="row isotope" id="isotope">
            <div class="col-sm-3 web-design isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="images/portfolio/portfolio1.jpg" alt="">
                        <figcaption>
                            <h3>Startup Business</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto"
                                href="images/portfolio/portfolio-bg1.jpg"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 development isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="images/portfolio/portfolio2.jpg" alt="">
                        <figcaption>
                            <h3>Easy to Lanunch</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto"
                                href="images/portfolio/portfolio-bg2.jpg"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 joomla isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="images/portfolio/portfolio3.jpg" alt="">
                        <figcaption>
                            <h3>Your Business</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto"
                                href="images/portfolio/portfolio-bg3.jpg"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 wordpress isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="images/portfolio/portfolio4.jpg" alt="">
                        <figcaption>
                            <h3>Prego Match</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto"
                                href="images/portfolio/portfolio-bg4.jpg"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 joomla isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="images/portfolio/portfolio5.jpg" alt="">
                        <figcaption>
                            <h3>Fashion Brand</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto"
                                href="images/portfolio/portfolio-bg5.jpg"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 development isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="images/portfolio/portfolio6.jpg" alt="">
                        <figcaption>
                            <h3>The Insidage</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto"
                                href="images/portfolio/portfolio-bg1.jpg"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 development isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="images/portfolio/portfolio7.jpg" alt="">
                        <figcaption>
                            <h3>Light Carpet</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto"
                                href="images/portfolio/portfolio-bg2.jpg"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 development isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="images/portfolio/portfolio8.jpg" alt="">
                        <figcaption>
                            <h3>Amazing Keyboard</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto"
                                href="images/portfolio/portfolio-bg3.jpg"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->
        </div><!-- Content row end -->
    </div><!-- Container end -->
</section><!-- Portfolio end -->

<!-- Feature box start -->
<section id="feature" class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
                <h2 class="title">Mengapa Kami
                    <span class="title-desc">
                        A Quality Experience Team with 4 years experience
                    </span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-heart-o"></i></span>
                <div class="feature-content">
                    <h3>Clean &amp; Modern Design</h3>
                    <p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
                </div>
            </div>
            <!--/ End first featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-codepen"></i></span>
                <div class="feature-content">
                    <h3>Useful Shortcodes</h3>
                    <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                </div>
            </div>
            <!--/ End 2nd featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-film"></i></span>
                <div class="feature-content">
                    <h3>Parallax Section</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End 3rd featurebox -->
        </div><!-- Content row end -->

        <div class="gap-40"></div>

        <div class="row">
            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-newspaper-o"></i></span>
                <div class="feature-content">
                    <h3>Multipurpose Concept</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End 1st featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-desktop"></i></span>
                <div class="feature-content">
                    <h3>Responsive Layout</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End 2nd featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-pagelines"></i></span>
                <div class="feature-content">
                    <h3>Light wight Performance</h3>
                    <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                </div>
            </div>
            <!--/ End 3rd featurebox -->

        </div><!-- Content row end -->

        <div class="gap-40"></div>

        <div class="row">
            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-recycle"></i></span>
                <div class="feature-content">
                    <h3>Free Lifetime Updates</h3>
                    <p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
                </div>
            </div>
            <!--/ End first featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
                <div class="feature-content">
                    <h3>Endless Possibilites</h3>
                    <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                </div>
            </div>
            <!--/ End first featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-whatsapp"></i></span>
                <div class="feature-content">
                    <h3>24/7 Live Support</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End first featurebox -->
        </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
</section>
<!--/ Feature box end -->


@endsection