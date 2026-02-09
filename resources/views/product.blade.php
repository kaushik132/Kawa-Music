@extends('dashboard.layout.main')
@section('contant')


<main>

    <section class="shop-top py-4">
        <div class="container">

            <!-- TOP ROW -->

            <a href="{{url('/')}}" class="back-btn mb-3">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-3">

                <div class="">


                    <div>
                        <h2 class="section-title">Kawa Music Shop</h2>
                        <p class="section-subtitle">
                            Premium instruments and signature fragrances curated for music lovers
                        </p>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <span class="product-count">12 Products Found</span>
                    <button class="filter-btn">
                        ☰ Filter
                    </button>
                </div>

            </div>

            <!-- FILTER PILLS -->
            <div class="filter-pills">
                <button class="pill active">All Product</button>
                <button class="pill">String Instruments</button>
                <button class="pill">Keyboard Instruments</button>
                <button class="pill">Percussion Instruments</button>
                <button class="pill">Wind Instruments</button>
                <button class="pill">Wind Instruments</button>
            </div>

            <div class="row mt-4">

                <div class="col-md-4">

                    <div class="trad-card">
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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
                        <a href="{{url('product-detail')}}">
                            <div class="trad-img position-relative">
                                <img src="assets/images/product.jpg" alt="">
                                <span class="cart-badge">
                                    <div class="trad-cart"><img src="assets/images/cart.png" alt=""></div>
                                </span>
                                <span class="enquiry-badge">
                                    <small>Send Inquiry</small>
                                </span>
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

</main>



@endsection
