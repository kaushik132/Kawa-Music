@extends('dashboard.layout.main')
@section('contant')
    <main>

        <section class="shop-top py-4">
            <div class="container">

                <!-- TOP ROW -->

                <a href="{{ url('/') }}" class="back-btn mb-3">
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
                    <button class="pill active" data-filter="all">All Product</button>

                    @foreach ($allfilter as $allfilters)
                        <button class="pill" data-filter="{{ $allfilters->id }}">
                            {{ $allfilters->name }}
                        </button>
                    @endforeach
                </div>



                <div class="row mt-4">

                    {{-- start --}}

                    @foreach ($productList as $productLists)
                        <div class="col-md-4 product-item"
                            data-filter="{{ implode(',', $productLists->product_filter ?? []) }}">


                            <div class="trad-card">
                                <a href="{{ url('product-detail/' . $productLists->slug) }}">
                                    <div class="trad-img position-relative">
                                        <img src="{{ url('uploads/' . $productLists->image) }}"
                                            alt="{{ $productLists->alt }}">
                                        <span class="enquiry-badge">
                                            <small>Send Inquiry</small>
                                        </span>
                                    </div>
                                    <div class="trad-content">
                                        <span class="trad-main-badge">
                                            {{ $productLists->category->name ?? '' }}
                                        </span>
                                        <h6>{{ $productLists->title }}</h6>
                                    </div>
                                </a>
                            </div>

                        </div>
                    @endforeach


                    {{-- end  --}}


                </div>

            </div>

        </section>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const buttons = document.querySelectorAll(".pill");
            const products = document.querySelectorAll(".product-item");

            buttons.forEach(button => {

                button.addEventListener("click", function() {

                    buttons.forEach(btn => btn.classList.remove("active"));
                    this.classList.add("active");

                    const filterValue = this.getAttribute("data-filter");

                    products.forEach(product => {

                        if (filterValue === "all") {
                            product.style.display = "block";
                            return;
                        }

                        let productFilters = product.getAttribute("data-filter");

                        if (!productFilters) {
                            product.style.display = "none";
                            return;
                        }

                        let filterArray = productFilters.split(',');

                        if (filterArray.includes(filterValue)) {
                            product.style.display = "block";
                        } else {
                            product.style.display = "none";
                        }

                    });

                });

            });

        });
    </script>
@endsection
