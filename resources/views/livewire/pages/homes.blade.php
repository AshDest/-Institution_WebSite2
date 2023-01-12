<div>
    <!-- slider-area -->
    @livewire('pages.home.slides')
    <!-- slider-area-end -->
    <!-- about-area -->
    @livewire('pages.home.about-homes')
    <!-- about-area-end -->
    <!-- services-three-area -->
    @livewire('pages.home.option-homes')
    <!-- services-three-area -->
    <!-- counter-area -->
    <div class="counter-area p-relative pt-90 pb-90"
        style="background-image:url(fronts/img/bg/counter-bg.png);  background-repeat: no-repeat;  background-size:cover;">
        <div class="container">

            <div class="row p-relative">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated"
                        data-delay=".2s">
                        <div class="counter p-relative"
                            style="background-image:url(fronts/img/bg/c-object.html);  background-repeat: no-repeat;">
                            <span class="count">1547</span>
                            <p>Project <br>Completed</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated"
                        data-delay=".2s">
                        <div class="counter p-relative"
                            style="background-image:url(fronts/img/bg/c-object.html);  background-repeat: no-repeat;">
                            <span class="count">2587</span>
                            <p>Our Happy <br>Clients</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated"
                        data-delay=".2s">
                        <div class="counter p-relative"
                            style="background-image:url(fronts/img/bg/c-object.html);  background-repeat: no-repeat;">
                            <span class="count">1879</span>
                            <p>Cup <br>Of Coffee</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated"
                        data-delay=".2s">
                        <div class="counter p-relative"
                            style="background-image:url(fronts/img/bg/c-object.html);  background-repeat: no-repeat;">
                            <span class="count">2547</span>
                            <p>Win <br>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area-end -->
    <!-- team-area -->
    @livewire('pages.home.personnel-homes')
    <!-- team-area-end -->
    <!-- cta-area -->
    <section class="cta-area cta-bg pt-120 pb-120" style="background-image:url(fronts/img/bg/cta_bg02.png)">
        <div class="container">
            <div class="row justify-content-center  align-items-center">
                <div class="col-lg-8">
                    <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated"
                        data-delay=".2s">
                        <h3>Watch Us</h3>
                        <h2> we provide truly prominent IT solutions.</h2>
                        <p>Nunc pellentesque eros ac augue tempus, vitae convallis lorem consectetur. Nulla maximus
                            at nisl eu malesuada. Nullam quis blandit lacus. Fusce tincidunt tellus turpis, quis
                            fermentum justo tempus eget.</p>
                        <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30"
                            data-animation="fadeInDown animated" data-delay=".2s">
                            <a href="about.html" class="btn ss-btn smoth-scroll">Let’s Get Started</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="s-video-content">
                        <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="popup-video mb-50"><img
                                src="fronts/img/bg/play-button.png" alt="circle_right"></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-area-end -->
    <!-- gallery-area -->
    @livewire('pages.home.galerie-homes')
    <!-- gallery-area-end -->

    <!-- frequently-area -->
    @livewire('pages.home.f-a-q')
    <!-- frequently-area-end -->
    <!-- pricing-area -->
    {{-- <section id="pricing" class="pricing-area pt-120 pb-60 fix p-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown"
                        data-delay=".4s">
                        <h5>Our Pricing</h5>
                        <h2>
                            Your Perfect Plans
                        </h2>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box pricing-box2 mb-60">
                        <div class="pricing-head">
                            <h3>Business</h3>
                            <div class="month">Monthly</div>
                            <div class="price-count">
                                <h2>$29.99</h2>
                            </div>
                            <hr>
                        </div>

                        <div class="pricing-body mt-20 mb-30 text-left">
                            <ul>
                                <li>Aliquam quis justo at lorem</li>
                                <li>Fusce sodales, urna et tempus</li>
                                <li>Vestibulum blandit lorem quis</li>
                                <li>Orci varius natoque penatibus</li>
                                <li>Aliquam a nisl congue, auctor</li>
                            </ul>
                        </div>


                        <div class="pricing-btn">
                            <a href="contact.html" class="btn ss-btn">Get Started <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box pricing-box2 mb-60">
                        <div class="pricing-head">
                            <h3>Standard</h3>
                            <div class="month">Monthly</div>
                            <div class="price-count">
                                <h2>$39.99</h2>
                            </div>
                            <hr>
                        </div>

                        <div class="pricing-body mt-20 mb-30 text-left">
                            <ul>
                                <li>Aliquam quis justo at lorem</li>
                                <li>Fusce sodales, urna et tempus</li>
                                <li>Vestibulum blandit lorem quis</li>
                                <li>Orci varius natoque penatibus</li>
                                <li>Aliquam a nisl congue, auctor</li>
                            </ul>
                        </div>


                        <div class="pricing-btn">
                            <a href="contact.html" class="btn ss-btn">Get Started <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box pricing-box2 mb-60">
                        <div class="pricing-head">
                            <h3>Premium</h3>
                            <div class="month">Monthly</div>
                            <div class="price-count">
                                <h2>$59.99</h2>
                            </div>
                            <hr>
                        </div>

                        <div class="pricing-body mt-20 mb-30 text-left">
                            <ul>
                                <li>Aliquam quis justo at lorem</li>
                                <li>Fusce sodales, urna et tempus</li>
                                <li>Vestibulum blandit lorem quis</li>
                                <li>Orci varius natoque penatibus</li>
                                <li>Aliquam a nisl congue, auctor</li>
                            </ul>
                        </div>


                        <div class="pricing-btn">
                            <a href="contact.html" class="btn ss-btn">Get Started <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- pricing-area-end -->
    <!-- testimonial-area -->
    <section class="testimonial-area pt-120 pb-115 p-relative fix"
        style="background-image:url(fronts/img/testimonial/test-bg.png); background-color: #edf0f3; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown"
                        data-delay=".4s">
                        <h5>Testimonial</h5>
                        <h2>
                            What Our Clients Says
                        </h2>

                    </div>

                </div>

                <div class="col-lg-12">
                    <div class="testimonial-active">
                        <div class="single-testimonial">

                            <p>“Morbi neque nisi, tincidunt nec erat vitae, viverra porttitor lorem. Fusce tempor
                                nunc at luctus blandit. Donec eget fermentum magna.we dedicate financial on services
                                the teams serve all Curabitur ac tortor ante. Sed quis dignissim”</p>
                            <div class="ta-info">
                                <h6>Margie Dose</h6>
                                <span>Web Developer</span>
                            </div>
                            <div class="qt-img">
                                <img src="fronts/img/testimonial/qt-icon.png" alt="img">
                            </div>
                            <div class="testi-author">
                                <img src="fronts/img/testimonial/testi_avatar.png" alt="img">
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <p>“Morbi neque nisi, tincidunt nec erat vitae, viverra porttitor lorem. Fusce tempor
                                nunc at luctus blandit. Donec eget fermentum magna.we dedicate financial on services
                                the teams serve all Curabitur ac tortor ante. Sed quis dignissim”</p>
                            <div class="ta-info">
                                <h6>Jone Walker</h6>
                                <span>Web Designer</span>
                            </div>
                            <div class="qt-img">
                                <img src="fronts/img/testimonial/qt-icon.png" alt="img">
                            </div>
                            <div class="testi-author">
                                <img src="fronts/img/testimonial/testi_avatar_02.png" alt="img">
                            </div>
                        </div>

                        <div class="single-testimonial">

                            <p>“Morbi neque nisi, tincidunt nec erat vitae, viverra porttitor lorem. Fusce tempor
                                nunc at luctus blandit. Donec eget fermentum magna.we dedicate financial on services
                                the teams serve all Curabitur ac tortor ante. Sed quis dignissim”</p>
                            <div class="ta-info">
                                <h6>Darlene Dobertson</h6>
                                <span>Web Developer</span>
                            </div>
                            <div class="qt-img">
                                <img src="fronts/img/testimonial/qt-icon.png" alt="img">
                            </div>
                            <div class="testi-author">
                                <img src="fronts/img/testimonial/testi_avatar_03.png" alt="img">
                            </div>
                        </div>
                        <div class="single-testimonial">

                            <p>“Morbi neque nisi, tincidunt nec erat vitae, viverra porttitor lorem. Fusce tempor
                                nunc at luctus blandit. Donec eget fermentum magna.we dedicate financial on services
                                the teams serve all Curabitur ac tortor ante. Sed quis dignissim”</p>
                            <div class="ta-info">
                                <h6>Margie Dose</h6>
                                <span>Web Developer</span>
                            </div>
                            <div class="qt-img">
                                <img src="fronts/img/testimonial/qt-icon.png" alt="img">
                            </div>
                            <div class="testi-author">
                                <img src="fronts/img/testimonial/testi_avatar.png" alt="img">
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <p>“Morbi neque nisi, tincidunt nec erat vitae, viverra porttitor lorem. Fusce tempor
                                nunc at luctus blandit. Donec eget fermentum magna.we dedicate financial on services
                                the teams serve all Curabitur ac tortor ante. Sed quis dignissim”</p>
                            <div class="ta-info">
                                <h6>Jone Walker</h6>
                                <span>Web Designer</span>
                            </div>
                            <div class="qt-img">
                                <img src="fronts/img/testimonial/qt-icon.png" alt="img">
                            </div>
                            <div class="testi-author">
                                <img src="fronts/img/testimonial/testi_avatar_02.png" alt="img">
                            </div>
                        </div>

                        <div class="single-testimonial">

                            <p>“Morbi neque nisi, tincidunt nec erat vitae, viverra porttitor lorem. Fusce tempor
                                nunc at luctus blandit. Donec eget fermentum magna.we dedicate financial on services
                                the teams serve all Curabitur ac tortor ante. Sed quis dignissim”</p>
                            <div class="ta-info">
                                <h6>Darlene Dobertson</h6>
                                <span>Web Developer</span>
                            </div>
                            <div class="qt-img">
                                <img src="fronts/img/testimonial/qt-icon.png" alt="img">
                            </div>
                            <div class="testi-author">
                                <img src="fronts/img/testimonial/testi_avatar_03.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->
    <!-- brand-area -->
    <div class="brand-area pt-60 pb-60" style="background-color:#38B000;">
        <div class="container">
            <div class="row brand-active">
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="fronts/img/brand/b-logo1.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="fronts/img/brand/b-logo2.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="fronts/img/brand/b-logo3.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="fronts/img/brand/b-logo4.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="fronts/img/brand/b-logo5.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
    <!-- blog-area -->
    @livewire('pages.home.blog-homes')
    <!-- blog-area-end -->
    {{--
    <!-- Background Area Start -->
    <section id="slider-container" class="slider-area two">
        <div class="slider-owl owl-theme owl-carousel">
            @foreach ($slides as $slide)
            <!-- Start Slingle Slide -->
            <div class="single-slide item" style="background-image: url('assets/images/slides/{{$slide->images}}')">
                <!-- Start Slider Content -->
                <div class="slider-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="slide-content-wrapper">
                                    <div class="slide-content text-center">
                                        <h2>PROFITEZ DE LA QUALITÉ D’ENSEIGNEMENT </h2>
                                        <p>Plus qu'une matière scolaire la science est mère de grandes vérités.
                                            Ambassadrice
                                            de l'exactitude, elle suscite beaucoup de pensées. </p>
                                        <a class="default-btn" href="about.html">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Slider Content -->
            </div>
            <!-- End Slingle Slide -->
            @endforeach
        </div>
    </section>
    <!-- Background Area End -->
    <!-- Service Start -->
    <div class="service-area two pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-service">
                        <h3><a href="teacher.html">PROFESSIONAL TEACHER</a></h3>
                        <p>I must explain to you how all this mistaken denouncing pleure and praising pain </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service">
                        <h3><a href="teacher.html">PROFESSIONAL TEACHER</a></h3>
                        <p>I must explain to you how all this mistaken denouncing pleure and praising pain </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service">
                        <h3><a href="teacher.html">PROFESSIONAL TEACHER</a></h3>
                        <p>I must explain to you how all this mistaken denouncing pleure and praising pain </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- About Start -->
    <div class="about-area pb-155">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-content">
                        <h2>BIENVENUE A L'<span>I.S.A.G.E/K-B</span></h2>
                        <p>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was
                            born
                            and I will give you a complete account of the system, and expound the actual teachings the
                            master-builder of humanit happiness</p>
                        <p class="hidden-sm">I must explain to you how all this mistaken idea of denouncing pleure and
                            prsing pain was born and I will give you a complete account of the system</p>
                        <a class="default-btn" href="about.html">view courses</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-img">
                        <img src="img/about/about.png" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Courses Area Start -->
    <div class="courses-area two pt-150 pb-150 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <img src="{{ asset('assets/images/icon/section1.png') }}" alt="section-title">
                        <h2>LES FILLIERES ORGANISEES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($fillieres as $filliere)
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/images/fillieres/{{$filliere->photo}}"
                                    alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h4><a href="course-details.html">{{$filliere->designation}}</a></h4>
                            <p>{{substr($filliere->detail, 0, 60).'...'}}</p>
                            <a class="default-btn" href="course-details.html">Voir plus</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-danger">
                    <center> . . . Pas d'Images . . .</center>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Courses Area End -->
    <!-- Notice Start -->
    <section class="notice-area two pt-140">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="notice-right-wrapper mb-25 pb-25">
                        <h3>TAKE A VIDEO TOUR</h3>
                        <div class="notice-video">
                            <div class="video-icon video-hover">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=fkoEj95puX0">
                                    <i class="zmdi zmdi-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="notice-left-wrapper">
                        <h3>Dernières Infos</h3>
                        <div class="notice-left">
                            @forelse ($news as $new)
                            <div class="single-notice-left mb-23 pb-20">
                                <h4>{{$new->created_at}}</h4>
                                <p>{{$new->detail}}</p>
                            </div>
                            @empty
                            <div class="alert alert-danger">
                                <center> . . . Pas d'Images . . .</center>
                            </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Notice End -->
    <!-- Event Area Start -->
    <div class="event-area two text-center pt-100 pb-145">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <img src="{{ asset('assets/images/icon/section.png') }}" alt="section-title">
                        <h2>EVENEMENTS A VENIR</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($events as $event)
                <div class="col-lg-6">
                    <div class="single-event mb-35">
                        <div class="event-img">
                            <a href="event-details.html"><img src="assets/images/events/{{$event->image}}"
                                    alt="event"></a>
                        </div>
                        <div class="event-content text-start">
                            <h3>{{$event->date}}</h3>
                            <h4><a href="event-details.html">{{$event->titre}}</a></h4>
                            <ul>
                                <li><i class="fa fa-clock-o"></i>{{$event->heure}}</li>
                                <li><i class="fa fa-map-marker"></i>{{$event->lieu}}</li>
                            </ul>
                            <div class="event-content-right">
                                <a class="default-btn" href="event-details.html">join now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-danger">
                    <center> . . . Pas de News . . .</center>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Event Area End -->
    <!-- Testimonial Area Start -->
    <div class="testimonial-area pt-110 pb-105 text-center">
        <div class="container">
            <div class="row">
                <div class="testimonial-owl owl-theme owl-carousel">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="single-testimonial">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src="img/testimonial/testimonial.jpg" alt="testimonial">
                                </div>
                                <div class="testimonial-content">
                                    <p>I must explain to you how all this mistaken idea of denoung pleure and praising
                                        pain
                                        was born and I will give you a coete account of the system, and expound the
                                        actual
                                    </p>
                                    <h4>David Morgan</h4>
                                    <h5>Student, CSE</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- Blog Area Start -->
    <div class="blog-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <img src="img/icon/section.png" alt="section-title">
                        <h2>LATEST FROM BLOG</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="img/blog/blog1.jpg" alt="blog"></a>
                            <div class="blog-hover">
                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p>By Alex / June 20, 2017 / <i class="fa fa-comments-o"></i> 4</p>
                            </div>
                            <div class="blog-bottom">
                                <h2><a href="blog-details.html">I must explain to you how all this a mistaken idea </a>
                                </h2>
                                <a href="blog-details.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="img/blog/blog2.jpg" alt="blog"></a>
                            <div class="blog-hover">
                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p>By Alex / June 20, 2017 / <i class="fa fa-comments-o"></i> 4</p>
                            </div>
                            <div class="blog-bottom">
                                <h2><a href="blog-details.html">I must explain to you how all this a mistaken idea </a>
                                </h2>
                                <a href="blog-details.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog mb-0">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="img/blog/blog3.jpg" alt="blog"></a>
                            <div class="blog-hover">
                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p>By Alex / June 20, 2017 / <i class="fa fa-comments-o"></i> 4</p>
                            </div>
                            <div class="blog-bottom">
                                <h2><a href="blog-details.html">I must explain to you how all this a mistaken idea </a>
                                </h2>
                                <a href="blog-details.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
    <!-- Subscribe Start -->
    <div class="subscribe-area pt-60 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="subscribe-content section-title text-center">
                        <h2>subscribe our newsletter</h2>
                        <p>I must explain to you how all this mistaken idea </p>
                    </div>
                    <div class="newsletter-form mc_embed_signup">
                        <form
                            action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                            class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                                    placeholder="Enter your e-mail address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div class="mc-news" aria-hidden="true"><input type="text"
                                        name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                <button id="mc-embedded-subscribe" class="default-btn" type="submit"
                                    name="subscribe"><span>subscribe</span></button>
                            </div>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End --> --}}

</div>
