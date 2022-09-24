@extends('layouts.frontend')

@section('tittle')
    Bright E-Shop
@endsection

@section('content')
    @include('layouts.inc.slider')
    <div class="py-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col-4 col-md-3 text-center border border-info border-5 border-top-0 border-bottom-0 border-end-0">
                    <h3 class="col-12 text-info">Trending Products</h3>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel features-carousel owl-theme">
                    @foreach ($feature_products as $prod)
                        <a href="">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/products/' . $prod->image) }}" alt="">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <span class="float-start text-danger">{{ $prod->selling_price }} Bath</span>
                                        <span class="float-end"><s>{{ $prod->original_price }} Bath</s></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col-5 col-md-3 text-center border border-info border-5 border-top-0 border-bottom-0 border-end-0">
                    <h3 class="text-info">Popular Categories</h3>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel categories-carousel owl-theme">
                    @foreach ($categories_popular as $cate)
                        <a href="{{ url('view-category/' . $cate->slug) }}">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/category/' . $cate->image) }}" alt="">
                                    <div class="card-body">
                                        <h5>{{ $cate->name }}</h5>
                                        <p>{{ $cate->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('.features-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });

        $('.categories-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>
@endsection
