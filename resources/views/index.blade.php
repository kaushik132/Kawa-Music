@extends('dashboard.layout.main')
@section('contant')
    <style>
        header {
            position: absolute !important;
            background-color: transparent !important;
            border-bottom: none;
        }

        header .nav-link {
            color: var(--main-color) !important;
        }
    </style>

    <main>
        <!-- hero section   -->

        <section class="hero-section">

            <div class="hero-bg" style="background-image:url('assets/images/hero.png');"></div>
            <div class="hero-overlay"></div>

            <div class="container hero-content">
                <h1>The Heartbeat of the Desert, The Rhythm of the World.</h1>
                <p>
                    Experience the explosive fusion of Rajasthani folk heritage and global brass traditions. From the sands
                    of Jaipur to the stages of Glastonbury. </p>

                <div class="hero-buttons">
                    <a href="#" class="theme-btn">Discover the Artist</a>
                    <a href="#" class="theme-btn-2">
                        <i class="fa-solid fa-phone"></i> Inquire for Bookings
                    </a>
                </div>
            </div>

            <div class="card-slider-wrapper">
                <div class="owl-carousel cardCarousel">
                    <div class="destination-card" data-location="Kolkata">
                        <img src="{{ url('assets/images/hero-small-slider.jpg') }}" alt="hero small slider">
                    </div>

                    <div class="destination-card" data-location="Kolkata">
                        <img src="{{ url('assets/images/hero-small-slider.jpg') }}" alt="hero small slider">
                    </div>
                    <div class="destination-card" data-location="Kolkata">
                        <img src="{{ url('assets/images/hero-small-slider.jpg') }}" alt="hero small slider">
                    </div>
                    <div class="destination-card" data-location="Kolkata">
                        <img src="{{ url('assets/images/hero-small-slider.jpg') }}" alt="hero small slider">
                    </div>
                    <div class="destination-card" data-location="Kolkata">
                        <img src="{{ url('assets/images/hero-small-slider.jpg') }}" alt="hero small slider">
                    </div>

                </div>
            </div>

            <div class="custom-arrows">
                <button class="arrow-prev"><i class="fa-solid fa-volume-high"></i></button>
                <button class="arrow-next"><i class="fa-solid fa-pause"></i></button>
            </div>

        </section>

        <!-- legacy-section -->

        <section class="legacy-section">
            <div class="container text-center">

                <h2 class="section-title">
                    The Kawa Legacy: <span class="heading-img"><img src="{{url('assets/images/heading.png')}}" alt="heading"></span>
                    Desert Soul, Global Rhythm
                </h2>

                <p class="section-subtitle">
                    The Kawa Legacy: Desert Soul, Global Rhythm Kawa Music is a vibrant fusion of Rajasthan’s royal heritage
                    and modern global energy. Rooted in the legendary Kawa family of Jaipur, this sound blends the
                    thundering pulse of traditional brass with the soulful melodies of the desert. It is an immersive
                    experience where ancient folk traditions meet the contemporary stage, creating a bridge between the
                    sands of the Thar and the world’s greatest festivals.
                </p>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="image-stack">

                            <div class="stack-img img-left">
                                <img src="{{url('assets/images/image-1.png')}}" alt="">
                                <div class="overlay">
                                    <h6>Ravi Kumar</h6>
                                    <a href="artist.php">View Profile</a>
                                </div>
                            </div>

                            <div class="stack-img img-center">
                                <img src="assets/images/image-2.jpg" alt="">
                                <div class="overlay">
                                    <h6>Ravi Kumar</h6>
                                    <a href="artist.php">View Profile</a>
                                </div>
                            </div>

                            <div class="stack-img img-right">
                                <img src="assets/images/image-3.jpg" alt="">
                                <div class="overlay">
                                    <h6>Ravi Kumar</h6>
                                    <a href="artist.php">View Profile</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mt-2 md-mt-5">
                    <a href="#musicians" class="simple-btn">
                        Meet the Musicians
                    </a>


                </div>

            </div>
        </section>


        <!-- vedio section  -->

        <section class="featured-video-section">
            <div class="container">

                <!-- TOP CONTENT -->
                <div class="video-header">
                    <div>
                        <span class="badge-featured">FEATURED VIDEO</span>
                        <h2 class="section-title text-white">Desert Folk Performance Live</h2>
                        <span class="views">2.5M views</span>
                        <p class="section-subtitle">
                            Experience the raw energy and authenticity of desert folk music performed live by our talented
                            artists.
                            This performance captures the essence of traditional melodies meeting contemporary audiences.
                        </p>
                    </div>

                    <a href="#" class="watch-btn">▶ Watch Now</a>
                </div>

                <!-- MAIN VIDEO -->
                <div class="main-video position-relative text-center">
                    <a href="https://www.youtube.com/watch?v=UkrElSTuWTw&list=RDUkrElSTuWTw&start_radio=1" target="_blank">
                        <img src="assets/images/hero.png" alt="Video Thumbnail" class="img-fluid">
                        <span class="play-icon">
                            <img src="assets/images/Polygon 2.png" alt="Play">
                        </span>

                    </a>
                </div>

                <!-- THUMB SLIDER -->
                <div class="thumb-main-parent position-relative">
                    <div class="thumb-slider owl-carousel">

                        <div class="thumb-card">
                            <a href="https://www.youtube.com/watch?v=UkrElSTuWTw&list=RDUkrElSTuWTw&start_radio=1"
                                target="_blank">
                                <img src="assets/images/heading.png">
                                <span class="play-small"><img src="assets/images/Polygon 2.png" alt=""></span>
                                <div class="thum-card-content">
                                    <h6>Traditional Instruments Showcase</h6>
                                    <small>1.8M Views</small>
                                </div>
                            </a>
                        </div>

                        <div class="thumb-card">
                            <a href="https://www.youtube.com/watch?v=UkrElSTuWTw&list=RDUkrElSTuWTw&start_radio=1"
                                target="_blank">
                                <img src="assets/images/heading.png">
                                <span class="play-small"><img src="assets/images/Polygon 2.png" alt=""></span>
                                <div class="thum-card-content">
                                    <h6>Traditional Instruments Showcase</h6>
                                    <small>1.8M Views</small>
                                </div>
                            </a>
                        </div>

                        <div class="thumb-card">
                            <a href="https://www.youtube.com/watch?v=UkrElSTuWTw&list=RDUkrElSTuWTw&start_radio=1"
                                target="_blank">
                                <img src="assets/images/heading.png">
                                <span class="play-small"><img src="assets/images/Polygon 2.png" alt=""></span>
                                <div class="thum-card-content">
                                    <h6>Traditional Instruments Showcase</h6>
                                    <small>1.8M Views</small>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="custom-arrows">
                        <button class="arrow-prev-cate"><i class="fa-solid fa-arrow-left"></i></button>
                        <button class="arrow-next-cate"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>

                </div>

            </div>
        </section>

        <!-- traditional section  -->

        <section>
            <div class="container">
                <ul class="heading-store">
                    <li class="">
                        <h2 class="section-title text-start">Traditional Instruments Showcase</h2>
                        <p class="section-subtitle text-start">Curated collection for music lovers and connoisseurs</p>
                    </li>
                    <li><a href="product.php">View All</a></li>
                </ul>
                <div class="row g-4">

                    <div class="col-md-4">

                        <div class="trad-card">
                            <a href="#!">
                                <div class="trad-img position-relative">
                                    <img src="assets/images/product.jpg" alt="">

                                </div>
                                <div class="trad-content">
                                    <span class="trad-main-badge">String Instrument</span>
                                    <h6>Acoustic Guitar</h6>

                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="trad-card">
                            <a href="#!">
                                <div class="trad-img position-relative">
                                    <img src="assets/images/product.jpg" alt="">

                                </div>
                                <div class="trad-content">
                                    <span class="trad-main-badge">String Instrument</span>
                                    <h6>Acoustic Guitar</h6>

                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="trad-card">
                            <a href="#!">
                                <div class="trad-img position-relative">
                                    <img src="assets/images/product.jpg" alt="">

                                </div>
                                <div class="trad-content">
                                    <span class="trad-main-badge">String Instrument</span>
                                    <h6>Acoustic Guitar</h6>

                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Captured section  -->

        <section>
            <div class="container">
                <ul class="heading-store">
                    <li class="">
                        <h2 class="section-title text-start">Captured Desert the Essence of Thar</h2>
                        <p class="section-subtitle text-start">One drop, a feeling of legacy</p>
                    </li>
                    <li><a href="product.php">View All</a></li>
                </ul>

                <div class="row g-4">

                    <div class="col-md-4">

                        <div class="trad-card">
                            <a href="#!">
                                <div class="trad-img position-relative">
                                    <img src="assets/images/purfume.jpg" alt="">

                                </div>
                                <div class="trad-content">
                                    <span class="trad-main-badge">String Instrument</span>
                                    <h6>Acoustic Guitar</h6>

                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="trad-card">
                            <a href="#!">
                                <div class="trad-img position-relative">
                                    <img src="assets/images/purfume.jpg" alt="">

                                </div>
                                <div class="trad-content">
                                    <span class="trad-main-badge">String Instrument</span>
                                    <h6>Acoustic Guitar</h6>

                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="trad-card">
                            <a href="#!">
                                <div class="trad-img position-relative">
                                    <img src="assets/images/purfume.jpg" alt="">
                                
                                </div>
                                <div class="trad-content">
                                    <span class="trad-main-badge">String Instrument</span>
                                    <h6>Acoustic Guitar</h6>

                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <section class="why-choose">
            <div class="container">

                <h2 class="section-title text-center">Traditional Instruments Showcase</h2>
                <p class="section-subtitle text-center">Curated collection for music lovers and connoisseurs</p>

                <div class="row">

                    <div class="col-md-6 col-lg-3">
                        <div class="why-card">
                            <div class="icon-box">
                                <img src="assets/images/why-1.png" alt="">
                            </div>
                            <h6>Authentic Folk Heritage</h6>
                            <p>Preserving traditional music forms with genuine artistry and cultural depth</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="why-card">
                            <div class="icon-box">
                                <img src="assets/images/why-2.png" alt="">
                            </div>
                            <h6>Global Music Collaboration</h6>
                            <p>Connecting artists and audiences across continents and cultures</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="why-card">
                            <div class="icon-box">
                                <img src="assets/images/why-3.png" alt="">
                            </div>
                            <h6>Premium Instruments</h6>
                            <p>Handpicked, high-quality instruments for professionals and enthusiasts</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">

                        <div class="why-card">
                            <div class="icon-box">
                                <img src="assets/images/why-4.png" alt="">
                            </div>
                            <h6>Curated Fragrances</h6>
                            <p>Signature scents inspired by musical traditions and desert landscapes</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- social section  -->

        <section class="social-section">
            <div class="container">

                <!-- TOP ROW -->
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                    <div>
                        <h3 class="section-title">Follow Our Journey</h3>
                        <p class="section-subtitle">Stories, insights, and inspiration from the world of music</p>
                    </div>

                    <div class="d-flex gap-3">
                        <!-- Instagram -->
                        <div class="social-pill insta">
                            <img src="assets/images/instagram.png" alt="Instagram">
                            <div class="pill-text">
                                <strong>250K</strong>
                                <small>Followers</small>
                            </div>
                        </div>

                        <!-- Facebook -->
                        <div class="social-pill fb">
                            <img src="assets/images/facebook.png" alt="Facebook">
                            <div class="pill-text">
                                <strong>250K</strong>
                                <small>Followers</small>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- INSTAGRAM HEADER -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center gap-2">
                        <div class="insta-icon"><img src="assets/images/instagram.png" alt=""></div>
                        <div>
                            <strong>Instagram</strong><br>
                            <small>@kawamusic</small>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-danger btn-sm">Follow</a>
                </div>

                <!-- GRID -->
                <div class="row g-3">
                    <!-- CARD -->
                    <div class="col-md-4">
                        <div class="img-card">
                            <img src="assets/images/heading.png">
                            <div class="img-overlay">
                                <div class="overlay-content">
                                    <span class="likes">❤ 12.6k &nbsp; 💬 362</span>
                                    <p>Desert melodies under the stars</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="img-card">
                            <img src="assets/images/heading.png">
                            <div class="img-overlay">
                                <div class="overlay-content">
                                    <span class="likes">❤ 12.6k &nbsp; 💬 362</span>
                                    <p>Desert melodies under the stars</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="img-card">
                            <img src="assets/images/heading.png">
                            <div class="img-overlay">
                                <div class="overlay-content">
                                    <span class="likes">❤ 12.6k &nbsp; 💬 362</span>
                                    <p>Desert melodies under the stars</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="img-card">
                            <img src="assets/images/heading.png">
                            <div class="img-overlay">
                                <div class="overlay-content">
                                    <span class="likes">❤ 12.6k &nbsp; 💬 362</span>
                                    <p>Desert melodies under the stars</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="img-card">
                            <img src="assets/images/heading.png">
                            <div class="img-overlay">
                                <div class="overlay-content">
                                    <span class="likes">❤ 12.6k &nbsp; 💬 362</span>
                                    <p>Desert melodies under the stars</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="img-card">
                            <img src="assets/images/heading.png">
                            <div class="img-overlay">
                                <div class="overlay-content">
                                    <span class="likes">❤ 12.6k &nbsp; 💬 362</span>
                                    <p>Desert melodies under the stars</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>



        <!-- testimonials section  -->
        <section class="testimonial-sec">
            <div class="container position-relative">
                <h2 class="section-title text-center">Trusted By Music Lovers Worldwide</h2>
                <p class="section-subtitle text-center">What our clients and community say about us</p>

                <div class="owl-carousel testimonial-slider">

                    <div class="item">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div>
                                    <h6 class="name">Harry Maguire</h6>
                                    <small class="role">Music Enthusiast</small>
                                </div>

                                <div class="rating">
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star">★</span>
                                </div>
                            </div>

                            <div class="testimonial-body">
                                <img src="assets/images/quote.png" alt="quote" class="quote-img">

                                <p class="testimonial-text">
                                    UI Wikir transformed our design process! The templates are
                                    modern, user-friendly, and saved us countless hours
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="custom-arrows">
                    <button class="arrow-prev-testi"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="arrow-next-testi"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </section>





    </main>
@endsection
