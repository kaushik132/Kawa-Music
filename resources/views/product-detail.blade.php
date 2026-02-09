@extends('dashboard.layout.main')
@section('contant')

<main>


    <section class="product-detail">
        <div class="container">
            <a href="{{url('product')}}" class="back-btn mb-3">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div class="row g-4">

                <!-- LEFT : IMAGE SLIDER -->
                <div class="col-lg-6">
                    <div class="product-gallery">

                        <!-- MAIN SLIDER -->
                        <div class="owl-carousel product-main-slider mb-3">
                            <div class="item">
                                <div class="img-box">
                                    <img src="assets/images/product.jpg">
                                </div>
                            </div>
                            <div class="item">
                                <div class="img-box">
                                    <img src="assets/images/purfume.jpg">
                                </div>
                            </div>
                            <div class="item">
                                <div class="img-box">
                                    <img src="assets/images/image-1.png">
                                </div>
                            </div>
                        </div>

                        <!-- THUMB SLIDER -->
                        <div class="owl-carousel product-thumb-slider">
                            <div class="item">
                                <div class="thumb-box">
                                    <img src="assets/images/product.jpg">
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb-box">
                                    <img src="assets/images/purfume.jpg">
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb-box">
                                    <img src="assets/images/image-1.png">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <!-- RIGHT : PRODUCT INFO -->
                <div class="col-lg-6 product-info">

                    <span class="product-tag">String Instruments</span>

                    <h2 class="product-title">Acoustic Guitar – Professional</h2>

                    <div class="product-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <span>4.8 <small>(124 reviews)</small></span>
                    </div>

                    <p class="product-desc">
                        Premium professional acoustic guitar crafted from solid rosewood and spruce. Perfect for both beginners and experienced musicians. Features include enhanced resonance, comfortable neck profile, and beautiful natural wood finish.
                    </p>

                    <div class="stock-status">In Stock · Ready to Ship</div>

                    <a href="#" class="inquiry-btn" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                        Send Inquiry <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <!-- FEATURES -->
                    <div class="icon-features">
                        <div class="feature-item">
                            <i class="fa-solid fa-truck-fast"></i>
                            <span>Free Shipping</span>
                        </div>
                        <div class="feature-item">
                            <i class="fa-solid fa-shield"></i>
                            <span>1 Year Warranty</span>
                        </div>
                        <div class="feature-item">
                            <i class="fa-solid fa-rotate-left"></i>
                            <span>Easy Returns</span>
                        </div>
                    </div>

                    <!-- TABS -->
                    <div class="custom-tabs">
                        <button class="tab-btn active" data-tab="features">Key Features</button>
                        <button class="tab-btn" data-tab="specs">Specifications</button>
                    </div>

                    <div class="tab-content-box active" id="features">
                        <ul>
                            <li>Solid rosewood back and sides</li>
                            <li>Spruce top for enhanced resonance</li>
                            <li>Premium quality strings</li>
                            <li>Comfortable neck profile</li>
                            <li>Professional grade tuning machines</li>
                        </ul>
                    </div>

                    <div class="tab-content-box" id="specs">
                        <ul>
                            <li>Body Type: Dreadnought</li>
                            <li>Top Wood: Spruce</li>
                            <li>Back & Sides: Rosewood</li>
                            <li>Finish: Natural Gloss</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <ul class="heading-store">
                <li class="">
                    <h2 class="section-title text-start">Kawa’s Choice</h2>
                    <p class="section-subtitle text-start">The favorites of our maestros.</p>
                </li>
                <li><a href="{{url('product')}}">View All</a></li>
            </ul>
            <div class="row g-4">

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





<!-- Inquiry Modal -->
<div class="modal fade inquiry-modal" id="inquiryModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <!-- CLOSE -->
            <button type="button" class="modal-close" data-bs-dismiss="modal">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="modal-body">

                <h4 class="modal-title">Send Product Inquiry</h4>
                <p class="modal-subtitle">
                    Fill in your details and we'll get back to you within 24 hours to process
                    your order for <strong>Acoustic Guitar – Professional</strong>.
                </p>

                <form>
                    <div class="mb-3">
                        <label>Full Name</label>
                        <input type="text" placeholder="Enter your full name">
                    </div>

                    <div class="mb-3">
                        <label>Email Address</label>
                        <input type="email" placeholder="your.email@example.com">
                    </div>

                    <div class="mb-3">
                        <label>Phone Number</label>
                        <input type="text" placeholder="Enter your number">
                    </div>

                    <div class="mb-3">
                        <label>Delivery Address</label>
                        <textarea rows="2" placeholder="Enter your complete delivery address"></textarea>
                    </div>

                    <div class="mb-4">
                        <label>Additional Notes</label>
                        <textarea rows="2" placeholder="Any specific requirement and question?"></textarea>
                    </div>

                    <!-- SUMMARY -->
                    <div class="product-summary">
                        <span>Product Summary</span>
                        <strong>₹15,999</strong>
                    </div>

                    <!-- ACTIONS -->
                    <div class="modal-actions">
                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn-submit">
                            Send Inquiry
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


@endsection
