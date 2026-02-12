@extends('dashboard.layout.main')
@section('contant')

    <main>
        <section class="artist-hero"
    style="background: url('{{ asset('uploads/'.$artistdetails->banner_image) }}') center/cover no-repeat;">

            <div class="hero-overlay"></div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-white">

                        <div class="artist-hero-content">
                            <span class="rating-pill">
                                ⭐ {{ $artistdetails->rating }} Rating · {{ $artistdetails->performances }} Performances
                            </span>

                            <h1 class="artist-title">{{ $artistdetails->artist_name }}</h1>
                            <p class="artist-subtitle">{{ $artistdetails->artist_role }}</p>

                            <div class="artist-info">
                                <span><i class="fa-solid fa-location-dot"></i> {{ $artistdetails->location }}</span>
                                <span><i class="fa-solid fa-briefcase"></i> {{ $artistdetails->experience }}</span>
                            </div>

                            <div class="hero-actions">
                                <a href="#" class="btn btn-light px-4 rounded-pill">
                                    <i class="fa-regular fa-envelope"></i> Book the Artist
                                </a>
                                <a href="{{ $artistdetails->watch_performance }}" target="_blank"
                                    class="btn btn-outline-light px-4 rounded-pill">
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
                            <h3>{{ $artistdetails->live_performance }}</h3>
                            <p>Live Performances</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="stat-box">
                            <i class="fa-solid fa-award"></i>
                            <h3>{{ $artistdetails->awards }}</h3>
                            <p>National Awards</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="stat-box">
                            <i class="fa-solid fa-music"></i>
                            <h3>{{ $artistdetails->stage_shows }}</h3>
                            <p>Stage Shows</p>
                        </div>
                    </div>

                </div>


                <div class="row mt-4 mt-md-5">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="section-title">
                            About {{ $artistdetails->artist_name }}
                        </h2>
                        <p class="section-text">
                            {!! $artistdetails->description !!}
                        </p>
                    </div>

                    <!-- RIGHT IMAGE -->
                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="{{ url('uploads/'. $artistdetails->image )}}" alt="{{$artistdetails->alt}}">
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

                            @if (!empty($artistdetails->achievements))
                                @php
                                    $achievements = explode("\n", $artistdetails->achievements);
                                @endphp

                                @foreach ($achievements as $achievement)
                                    @if (trim($achievement) != '')
                                        <div class="col-md-6">
                                            <div class="achive-badge">
                                                <img src="{{ asset('assets/images/medal copy.png') }}" alt="medal">
                                                <span>{{ trim($achievement) }}</span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif

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

                        @foreach ($artsdetails as $art)

                        <div class="thumb-card">
                            <a href="{{ $art->video_url }}"
                                target="_blank">
                                <img src="{{url('uploads/'.$art->video_image)}}" alt="{{$art->alt}}">
                                <span class="play-small"><img src="{{asset('assets/images/Polygon 2.png')}}" alt="Video Button"></span>
                                <div class="thum-card-content">
                                    <h6>{{$art->title}}</h6>
                                    <small>{{$art->view}} Views</small>
                                </div>
                            </a>
                        </div>

                        @endforeach



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
                            <img src="{{asset('assets/images/instagram.png')}}" alt="Instagram">
                            <div class="pill-text">
                                <strong>{{ $artistdetails->instagram_followers }}</strong>
                                <small>Followers</small>
                            </div>
                        </div>

                        <!-- Facebook -->
                        <div class="social-pill fb">
                            <img src="{{asset('assets/images/facebook.png')}}" alt="Facebook">
                            <div class="pill-text">
                                <strong>{{$artistdetails->facebook_followers}}</strong>
                                <small>Followers</small>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- INSTAGRAM HEADER -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center gap-2">
                        <div class="insta-icon"><img src="{{asset('assets/images/instagram.png')}}" alt="instagram"></div>
                        <div>
                            <strong>Instagram</strong><br>
                            <small>{{$artistdetails->aritist_instaid}}</small>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-danger btn-sm">Follow</a>
                </div>

                <!-- GRID -->
                <div class="row g-3">
                    <!-- CARD -->
                    @foreach ($artinstadetails as $artinstas)
                    <div class="col-md-4">
                        <div class="img-card">
                            <img src="{{url('uploads/'.$artinstas->image)}}" alt="{{$artinstas->alt}}">
                            <div class="img-overlay">
                                <div class="overlay-content">
                                    <span class="likes">❤ {{$artinstas->likes_num}} &nbsp; 💬 {{$artinstas->comment_num}}</span>
                                    <p>{{$artinstas->post_title}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach


                </div>

            </div>
        </section>





    </main>

@endsection
