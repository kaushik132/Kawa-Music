@extends('dashboard.layout.main')
@section('contant')

<main>
    <section class="artist-hero">
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-white">

                    <div class="artist-hero-content">
                        <span class="rating-pill">
                            ⭐ 4.9 Rating · 294 Performances
                        </span>

                        <h1 class="artist-title">Ravi Kumar</h1>
                        <p class="artist-subtitle">Classical Fusion Artist</p>

                        <div class="artist-info">
                            <span><i class="fa-solid fa-location-dot"></i> Jaipur, Rajasthan</span>
                            <span><i class="fa-solid fa-briefcase"></i> 15+ Years Experience</span>
                        </div>

                        <div class="hero-actions">
                            <a href="#" class="btn btn-light px-4 rounded-pill">
                                <i class="fa-regular fa-envelope"></i> Book the Artist
                            </a>
                            <a href="#" class="btn btn-outline-light px-4 rounded-pill">
                                <i class="fa-solid fa-play"></i> Watch Performance
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <section class="artist-stats">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="stat-box">
                        <i class="fa-solid fa-users"></i>
                        <h3>250+</h3>
                        <p>Live Performances</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-box">
                        <i class="fa-solid fa-award"></i>
                        <h3>8</h3>
                        <p>National Awards</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-box">
                        <i class="fa-solid fa-music"></i>
                        <h3>250+</h3>
                        <p>Stage Shows</p>
                    </div>
                </div>

            </div>


            <div class="row mt-4 mt-md-5">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title">
                        About Ravi Kumar
                    </h2>
                    <p class="section-text">
                        Ravi Kumar is a masterful musician who seamlessly blends classical Indian ragas with contemporary fusion elements. Born and raised in Jaipur, Rajasthan, he was immersed in the rich musical traditions of the region from an early age.
                        With over 15 years of professional experience, Ravi has established himself as one of the most innovative voices in classical fusion music. His performances are known for their emotional depth, technical precision, and ability to connect with diverse audiences.
                        Ravi's unique approach respects the integrity of classical forms while embracing modern instrumentation and compositional techniques. He has performed at prestigious venues worldwide and collaborated with renowned artists across multiple genres.
                    </p>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/hero-small-slider.jpg" alt="Music Performance">
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!-- achivment section  -->

    <section class="achivement">
        <div class="container">
            <h2 class="section-title text-center mb-4">
                Achievements & Recognition
            </h2>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="achive-badge">
                                <img src="assets/images/medal copy.png" alt="">
                                <span>National Folk Music Award Winner 2022</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="achive-badge">
                                <img src="assets/images/medal copy.png" alt="">
                                <span>National Folk Music Award Winner 2021</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="achive-badge">
                                <img src="assets/images/medal copy.png" alt="">
                                <span>Best Classical Performer</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="achive-badge">
                                <img src="assets/images/medal copy.png" alt="">
                                <span>State Level Music Honor</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="achive-badge">
                                <img src="assets/images/medal copy.png" alt="">
                                <span>International Folk Festival Award</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="achive-badge">
                                <img src="assets/images/medal copy.png" alt="">
                                <span>Lifetime Contribution Award</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </section>

    <section>
        <div class="container">
            <h2 class="section-title text-center">Performance Videos</h2>

            <!-- THUMB SLIDER -->
            <div class="thumb-main-parent position-relative">
                <div class="thumb-slider owl-carousel">

                    <div class="thumb-card">
                        <a href="https://www.youtube.com/watch?v=UkrElSTuWTw&list=RDUkrElSTuWTw&start_radio=1" target="_blank">
                            <img src="assets/images/heading.png">
                            <span class="play-small"><img src="assets/images/Polygon 2.png" alt=""></span>
                            <div class="thum-card-content">
                                <h6>Traditional Instruments Showcase</h6>
                                <small>1.8M Views</small>
                            </div>
                        </a>
                    </div>

                    <div class="thumb-card">
                        <a href="https://www.youtube.com/watch?v=UkrElSTuWTw&list=RDUkrElSTuWTw&start_radio=1" target="_blank">
                            <img src="assets/images/heading.png">
                            <span class="play-small"><img src="assets/images/Polygon 2.png" alt=""></span>
                            <div class="thum-card-content">
                                <h6>Traditional Instruments Showcase</h6>
                                <small>1.8M Views</small>
                            </div>
                        </a>
                    </div>

                    <div class="thumb-card">
                        <a href="https://www.youtube.com/watch?v=UkrElSTuWTw&list=RDUkrElSTuWTw&start_radio=1" target="_blank">
                            <img src="assets/images/heading.png">
                            <span class="play-small"><img src="assets/images/Polygon 2.png" alt=""></span>
                            <div class="thum-card-content">
                                <h6>Traditional Instruments Showcase</h6>
                                <small>1.8M Views</small>
                            </div>
                        </a>
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





</main>

@endsection
