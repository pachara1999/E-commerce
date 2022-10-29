@extends('layouts.frontend')

@section('tittle')
    My Cart
@endsection

@section('content')
    <div class="py-3 mb-3 shadow-sm bg-info boder-top">
        <div class="container">
            <h6 class="mb-0"><a href="{{ url('/') }}">Home</a> / <a href="{{ url('cart') }}">Cart</a></h6>
        </div>
    </div>

    <div class="container py-3">
        @php $total = 0 ; @endphp
        @if ($cartItems->count() > 0)
            @foreach ($cartItems as $item)
                <div class="card shadow product_data mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 text-center align-self-center">
                                <img src="{{ asset('assets/uploads/products/' . $item->products->image) }}" height="80px"
                                    alt="">
                            </div>
                            <div class="col-md-3 align-self-center">
                                <h4>{{ $item->products->name }}</h4>
                            </div>
                            <div class="col-md-2 align-self-center">
                                <h6>{{ $item->products->selling_price }} Bath</h6>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                                @if ($item->products->qty >= $item->prod_qty)
                                    <label for="Quantity">Quantity</label>
                                    <div class="input-group text-center mb-3" style="width: 130px;">
                                        <button class="input-group-text changeQuantity decrement-btn">-</button>
                                        <input type="text" name="quantity" class="form-control qty-input text-center"
                                            value="{{ $item->prod_qty }}">
                                        <button class="input-group-text changeQuantity increment-btn">+</button>
                                    </div>
                                    @php $total += $item->products->selling_price*$item->prod_qty ; @endphp
                                @else
                                    <h6>Out of Stoct</h6>
                                @endif
                            </div>
                            <div class="col-md-2 align-self-center">
                                <button type="button" class="btn btn-danger delete-cart-item"><i
                                        class="fa fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="container">
                <span>Don't have any item in cart.</span>
            </div>
        @endif
        <div class="row mt-4">
            <div class="col-md-12">
                <h4>Total price : {{ $total }} Bath @if ($cartItems->count() > 0)
                        <a href="{{ url('checkout') }}" class="btn btn-outline-success float-end">Process to checkout</a>
                    @endif
                </h4>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
