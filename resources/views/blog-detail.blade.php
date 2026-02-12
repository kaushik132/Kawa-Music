@extends('dashboard.layout.main')
@section('contant')
    <main>

        <section class="blog-detail-section py-4">
            <div class="container">
                <div class="row g-4">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-8">

                        <a href="blog.php" class="back-btn">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>

                        <h1 class="blog-title">
                            {{ $blogdetails->title }}
                        </h1>

                        <div class="blog-meta mb-3">
                            <span><i class="fa-regular fa-user"></i> {{ $blogdetails->author }}</span>
                            <span><i class="fa-regular fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($blogdetails->date)->format('d F, Y') }}</span>
                            <span><i class="fa-regular fa-clock"></i>{{ $blogdetails->blogCategory->name }}</span>
                        </div>

                        <div class="blog-featured-img">
                            <img src="{{ url('uploads/' . $blogdetails->image) }}" alt="{{ $blogdetails->alt }}">
                        </div>

                        <div class="blog-content mt-4">
                            {!! $blogdetails->description !!}



                        </div>

                    </div>

                    <!-- RIGHT SIDEBAR -->
                    <div class="col-lg-4">

                        <!-- RECENT POSTS -->
                        <div class="sidebar-box">
                            <h5 class="sidebar-title">Recent Blog</h5>

                            @foreach ($allb as $ab)
                            <a href="{{ url('blog-detail/' . $ab->slug) }}">
                                <div class="recent-post-item d-flex align-items-start">


                                    <div class="recent-post-content">
                                        <span class="tag gadget">{{ $ab->blogCategory->name }}</span>
                                        <h6>
                                            {{ $ab->title }}
                                        </h6>
                                        <span class="date">
                                            <i class="fa-regular fa-calendar"></i>
                                            {{ \Carbon\Carbon::parse($ab->date)->format('d F, Y') }}
                                        </span>
                                    </div>

                                    <div class="recent-post-img">
                                        <img src="{{ url('uploads/' . $ab->image) }}" alt="{{ $ab->alt }}">
                                    </div>
                                </div>
                                </a>
                            @endforeach



                        </div>

                        <!-- SUBSCRIBE -->
                        <div class="sidebar-box mt-4 subscribe-box">
                            <h5 class="sidebar-title">Share</h5>

                            @php
                                $url = urlencode(request()->fullUrl());
                                $title = urlencode($blogdetails->title);
                            @endphp

                            <div class="subscribe-social-list">

                                <!-- Facebook -->
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank"
                                    class="subscribe-social-item">
                                    <i class="fa-brands fa-facebook-f"></i> Facebook
                                </a>

                                <!-- Twitter -->
                                <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}"
                                    target="_blank" class="subscribe-social-item">
                                    <i class="fa-brands fa-twitter"></i> Twitter
                                </a>

                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"
                                    target="_blank" class="subscribe-social-item">
                                    <i class="fa-brands fa-linkedin-in"></i> Linkedin
                                </a>

                                <!-- Pinterest -->
                                <a href="https://pinterest.com/pin/create/button/?url={{ $url }}&description={{ $title }}"
                                    target="_blank" class="subscribe-social-item">
                                    <i class="fa-brands fa-pinterest-p"></i> Pinterest
                                </a>

                                <!-- WhatsApp -->
                                <a href="https://api.whatsapp.com/send?text={{ $title }}%20{{ $url }}"
                                    target="_blank" class="subscribe-social-item">
                                    <i class="fa-brands fa-whatsapp"></i> WhatsApp
                                </a>

                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </section>



    </main>
@endsection
