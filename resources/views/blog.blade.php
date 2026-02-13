@extends('dashboard.layout.main')
@section('contant')
    <main>

        <!-- breadcum section   -->

        <section class="breadcrumb-section">
            <div class="breadcrumb-overlay"></div>

            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1>Blogs </h1>
                    <ul class="breadcrumb-list">
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>Blogs</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- blog sec area  -->
        <section class="blog-section">

            <div class="container">


                <div class="row g-4">

                    <!-- top BIG BLOG -->
                    {{-- <div class="col-lg-4">
                        <a href="{{ url('blog-detail') }}">
                            <div class="blog-card blog-large p-0">
                                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="">
                                <div class="blog-overlay">
                                    <h4>The Revival of Desert Folk Music in Modern Times</h4>
                                    <div class="blog-meta">
                                        <span><i class="fa-regular fa-user"></i> By Admin</span>
                                        <span><i class="fa-regular fa-calendar"></i> 27 August, 2024</span>
                                        <span><i class="fa-regular fa-clock"></i> 20 Mins</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> --}}
                    {{-- <div class="col-lg-4">
                        <a href="{{ url('blog-detail') }}">
                            <div class="blog-card blog-large p-0">
                                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="">
                                <div class="blog-overlay">
                                    <h4>The Revival of Desert Folk Music in Modern Times</h4>
                                    <div class="blog-meta">
                                        <span><i class="fa-regular fa-user"></i> By Admin</span>
                                        <span><i class="fa-regular fa-calendar"></i> 27 August, 2024</span>
                                        <span><i class="fa-regular fa-clock"></i> 20 Mins</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> --}}
                    {{-- <div class="col-lg-4">
                        <a href="{{ url('blog-detail') }}">
                            <div class="blog-card blog-large p-0">
                                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="">
                                <div class="blog-overlay">
                                    <h4>The Revival of Desert Folk Music in Modern Times</h4>
                                    <div class="blog-meta">
                                        <span><i class="fa-regular fa-user"></i> By Admin</span>
                                        <span><i class="fa-regular fa-calendar"></i> 27 August, 2024</span>
                                        <span><i class="fa-regular fa-clock"></i> 20 Mins</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> --}}


                    <h2 class="section-title">Latest Articles</h2>



                    <div class="row g-4">

                        <!-- BLOG ITEM -->


                        @foreach ($blogList as $blog)
                            <div class="col-lg-4 col-md-6">
                                <a href="{{ url('blog-detail/' . $blog->slug) }}">
                                    <div class="blog-card blog-small">
                                        <img src="{{ url('uploads/' . $blog->image) }}" alt="{{ $blog->alt }}">
                                        <div class="blog-content">
                                            <h5>{{ $blog->title }}</h5>
                                            <div class="blog-meta">
                                                <span>{{ $blog->author }}</span> •
                                                <span>{{ \Carbon\Carbon::parse($blog->date)->format('d F, Y') }}
                                                </span> • <span>{{ $blog->blogCategory->name }} </span>
                                            </div>
                                            <p>
                                                {!! \Illuminate\Support\Str::limit($blog->description, 150) !!}

                                            </p>
                                            <a href="{{ url('blog-detail/' . $blog->slug) }}" class="read-more">
                                                Read More <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                        <!-- BLOG ITEM -->




                    </div>
                </div>
            </div>



        </section>





    </main>
@endsection
