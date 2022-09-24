@extends('layouts.frontend')

@section('title')
    {{ $category->name }}
@endsection

@section('content')
    <div class="py-3 mb-3 shadow-sm bg-info boder-top">
        <div class="container">
            <h6 class="mb-0">Collections / {{ $category->name }}</h6>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2 class="text-info mb-4">{{ $category->name }}</h2>
                @foreach ($products as $prod)
                    <div class="col-md-4 mb-3">
                        <a href="{{ url('view-category/' . $category->slug . '/' . $prod->slug) }}">
                            <div class="card shadow-lg">
                                <img src="{{ asset('assets/uploads/products/' . $prod->image) }}" alt="">
                                <div class="card-body">
                                    <h5>{{ $prod->name }}</h5>
                                    <span class="float-start text-danger">{{ $prod->selling_price }} Bath</span>
                                    <span class="float-end"><s>{{ $prod->original_price }} Bath</s></span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scritps')
@endsection
