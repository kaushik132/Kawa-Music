@extends('dashboard.layout.main')
@section('contant')
    <main>

        <!-- breadcum section   -->

        <section class="breadcrumb-section">
            <div class="breadcrumb-overlay"></div>

            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1>Contact Us </h1>
                    <ul class="breadcrumb-list">
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="contact-info-section">
            <div class="container">
                <div class="row g-4">

                    <!-- Email -->
                    <div class="col-lg-3 col-md-6">
                        <a href="mailto:{{ $info->email }}" class="contact-card">
                            <div class="icon-box">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <h6>Email Us</h6>
                            <p>{{ $info->email }}</p>
                        </a>
                    </div>

                    <!-- Call -->
                    <div class="col-lg-3 col-md-6">
                        <a href="tel:{{ $info->call }}" class="contact-card">
                            <div class="icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <h6>Call Us</h6>
                            <p>{{ $info->call }}</p>
                        </a>
                    </div>

                    <!-- Visit -->
                    <div class="col-lg-3 col-md-6">
                        <a href="https://maps.google.com" target="_blank" class="contact-card">
                            <div class="icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <h6>Visit Us</h6>
                            <p>
                                {{ $info->address }}
                            </p>
                        </a>
                    </div>

                    <!-- Business Hours -->
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-card">
                            <div class="icon-box">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <h6>Business Hours</h6>
                            <p>
                                {{ $info->business_hours }}
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row g-4 mt-4">

                    <!-- LEFT FORM -->
                    <div class="col-lg-7">
                        <div class="contact-card text-start">
                            <h2 class="mb-1">Send Us a Message</h2>
                            <p class="text-muted mb-4">
                                Share your travel plans or questions, and our team will respond within 24 hours.
                            </p>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf

                                <div class="row g-3">

                                    <!-- First Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">Full Name*</label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}"
                                         oninput="this.value = this.value.replace(/[^A-Za-z+. ]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            class="form-control custom-input" placeholder="Your first name">
                                        <span class="text-danger">
                                            @error('first_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <!-- Last Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">Last name*</label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}"
                                         oninput="this.value = this.value.replace(/[^A-Za-z+. ]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            class="form-control custom-input" placeholder="Your last name">
                                        <span class="text-danger">
                                            @error('last_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-12">
                                        <label class="form-label">Email Address*</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control custom-input" placeholder="your.email@example.com">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-12">
                                        <label class="form-label">Phone Number*</label>
                                        <div class="phone-group">
                                            <select name="country_code" class="country-code">
                                                <option value="+91">+91</option>
                                                <option value="+1">+1</option>
                                                <option value="+44">+44</option>
                                                <option value="+61">+61</option>
                                            </select>

                                            <input type="text" name="phone" value="{{ old('phone') }}"
                                            maxlength="10"
                                             oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                class="form-control phone-input" placeholder="Enter phone number">
                                        </div>
                                        <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <!-- Subject -->
                                    <div class="col-12">
                                        <label class="form-label">Subject*</label>
                                        <select name="subject" class="form-select custom-input">
                                            <option value="">Select a subject</option>
                                            <option value="Booking">Booking</option>
                                            <option value="Support">Support</option>
                                            <option value="General Query">General Query</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('subject')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    
                                    <!-- Message -->
                                    <div class="col-12">
                                        <label class="form-label">Message*</label>
                                        <textarea name="message" rows="4" class="form-control custom-input"
                                            placeholder="Tell us more about your inquiry...">{{ old('message') }}</textarea>
                                        <span class="text-danger">
                                            @error('message')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-12">
                                        <button type="submit" class="send-btn w-100">
                                            Send Message
                                        </button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                    <!-- RIGHT MAP -->
                    <div class="col-lg-5">
                        <div class="map-card h-100">
                            <h3 class="mb-3">Find Us</h3>

                            <div class="map-box">
                                <iframe src="https://www.google.com/maps?q=Toronto&output=embed" loading="lazy">
                                </iframe>
                            </div>

                            <div class="help-box mt-3">
                                <h5>Need Immediate Assistance?</h5>

                                <div class="help-item">
                                    <i class="bi bi-telephone"></i>
                                    <div>
                                        <span>Call Our Booking Team</span>
                                        <a href="tel:{{ $info->call }}">{{ $info->call }}</a>
                                    </div>
                                </div>

                                <div class="help-item">
                                    <i class="bi bi-envelope"></i>
                                    <div>
                                        <span>Email for Bookings</span>
                                        <a href="mailto:{{ $info->email }}">{{ $info->email }}</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="container mt-3">

                <div class="text-center mb-0 md-mb-4">
                    <span class="faq-badge">FAQ</span>
                    <h2 class="faq-title">Frequently Asked Questions</h2>
                    <p class="faq-subtitle">
                        Everything you need to know about using Ship X, from shipment tracking to client management.
                        Find quick answers to common queries below.
                    </p>
                </div>

                <div class="faq-list">

                    <div class="faq-item active">
                        <button class="faq-question">
                            How do I track my shipment?
                            <span class="icon">−</span>
                        </button>
                        <div class="faq-answer">
                            Everything you need to know about using Ship X, from shipment tracking to client management.
                            Find quick answers to common queries below.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Can I manage multiple shipments at once?
                            <span class="icon">+</span>
                        </button>
                        <div class="faq-answer">
                            Yes, Ship X allows you to manage and track multiple shipments from a single dashboard.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Is there a mobile app for Ship X?
                            <span class="icon">+</span>
                        </button>
                        <div class="faq-answer">
                            Yes, our mobile app is available for both Android and iOS devices.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Can I integrate Ship X with my business system?
                            <span class="icon">+</span>
                        </button>
                        <div class="faq-answer">
                            Ship X supports API integrations with popular ERP and CRM platforms.
                        </div>
                    </div>

                </div>

            </div>
        </section>


    </main>
@endsection
