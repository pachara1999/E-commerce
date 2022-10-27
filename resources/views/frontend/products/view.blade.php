@extends('layouts.frontend')

@section('title')
    {{ $product->name }}
@endsection

@section('content')
    <div class="py-3 mb-3 shadow-sm bg-info boder-top">
        <div class="container">
            <h6 class="mb-0">Collections / {{ $product->category->name }} / {{ $product->name }}</h6>
        </div>
    </div>

    <div class="container">
        <div class="card shadow-lg product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('assets/uploads/products/' . $product->image) }}" class="w-100 " alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $product->name }}
                            @if ($product->trending)
                                <label class="float-end badge bg-danger trending_tag">Trending</label>
                            @endif
                        </h2>

                        <hr>
                        <label class="me-3">Original price : <s>{{ $product->original_price }} Bath</s></label>
                        <label class="fw-bold"><span class="text-danger"><u>Selling price : {{ $product->selling_price }}
                                    Bath</u></span></label>
                        <p class="mt-3">
                            {!! $product->small_description !!}
                        </p>
                        <hr>
                        @if ($product->qty > 0)
                            <label class="badge bg-success">In stock</label>
                        @else
                            <label class="badge bg-danger">Out of stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <input type="hidden" value="{{ $product->id }}" class="prod_id">
                                <label for="">Quantity</label>
                                <div class="input-group text-center mb-3">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quatity" value="1"
                                        class="form-control text-center qty-input">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <br />
                                <button type="button" class="btn btn-success me-3 float-start m-1"><i
                                        class="fas fa-heart"></i> Add to Wishlist</button>
                                <button type="button" class="btn btn-primary me-3 float-start m-1 addToCartBtn"><i
                                        class="fa fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-12 p-2">
                    {{ $product->description }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            
        })
    </script>
@endsection
