@extends('layouts.frontend')

@section('tittle')
    Bright E-Shop (Categories)
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2 class="mb-4">All Categories</h2>
            </div>
            <div class="row">
                @foreach ($categories as $cate)
                    <div class="col-md-4 mb-3">
                        <a href="{{ url('view-category/' . $cate->slug) }}">
                            <div class="card shadow-lg">
                                <img src="{{ asset('assets/uploads/category/' . $cate->image) }}" alt="">
                                <div class="card-body">
                                    <h5>{{ $cate->name }}</h5>
                                    <p>{{ $cate->description }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
