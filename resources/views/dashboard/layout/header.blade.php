<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kawa Musics</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <!-- <link rel="stylesheet" href="assets/css/aos.css" type="text/css"> -->
    <link rel="stylesheet" href="{{ asset('assets/webfonts') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>


    <header>
        <div id="myHeader" class="">
            <div class="container">
                <div class="headermn">
                    <nav class="navbar navbar-expand-lg p-0 align-items-center">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Main Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">

                            <img src="{{ asset('assets/images/menu.png') }}" alt="Menu" class="menu-icon">
                        </button>


                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="navigation logo">
                                </h5>
                                <button class="offcanvas-close-btn" type="button" data-bs-dismiss="offcanvas"
                                    aria-label="Close">
                                    <img src="{{ asset('assets/images/close.png') }}" alt="close">
                                </button>
                            </div>

                            <div class="offcanvas-body align-items-center">
                                <ul class="navbar-nav justify-content-center flex-grow-1">
                                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>


                                    <li class="nav-item dropdown artist-dropdown">
                                        <a class="nav-link artist-trigger" href="#" role="button">
                                            About Us <i class="fa-solid fa-caret-down"></i>
                                        </a>

                                        <div class="dropdown-menu artist-menu">
                                            <div class="artist-row">
                                                @foreach ($artistlist as $artistlists)
                                                    <a href="{{ url('artist/' . $artistlists->slug) }}"
                                                        class="artist-card">
                                                        <img src="{{ url('uploads/' . $artistlists->image) }}" alt="">
                                                        <h6>{{$artistlists->artist_name}}</h6>
                                                        <span>{{$artistlists->artist_role}}</span>
                                                    </a>
                                                @endforeach




                                            </div>
                                        </div>
                                    </li>



                                    <li class="nav-item dropdown artist-dropdown">
                                        <a class="nav-link artist-trigger" href="#!" role="button">
                                            Our Product <i class="fa-solid fa-caret-down"></i>
                                        </a>

                                        <div class="dropdown-menu artist-menu">
                                            <div class="artist-row">

                                                @foreach ($pf as $pfs)

                                                <a href="{{ url('product/'. $pfs->slug) }}" class="artist-card">
                                                    <img src="{{url('uploads/'.$pfs->image)}}" alt="{{$pfs->alt}}">
                                                    <h6>{{$pfs->name}}</h6>

                                                </a>
                                                @endforeach






                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="{{ url('blog') }}">Blog</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact
                                            Us</a></li>

                                </ul>

                                <div class="lang-dropdown">
                                    <div class="lang-selected">
                                        English
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>

                                    <ul class="lang-options">
                                        <li data-lang="en">English</li>
                                        <li data-lang="hi">Hindi</li>
                                        <li data-lang="fr">French</li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
