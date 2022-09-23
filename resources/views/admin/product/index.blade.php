@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Products</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('add-product') }}" class="btn btn-success btn-rounded">
                        <i class="fa fa-add"></i> Add Product
                    </a>
                </div>
            </div>

            <div class="row m-2">
                <div class="table-responsive text-center">
                    <table class="table table-bordered table-hover" id="">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Category</td>
                                <td>Description</td>
                                <td>Original Price</td>
                                <td>Selling</td>
                                <td width="150px">Image</td>
                                <td>Tools</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->original_price }} Bath</td>
                                    <td>{{ $item->selling_price }} Bath</td>
                                    <td>
                                        @if ($item->image != null)
                                            <img src="{{ asset('assets/uploads/products/' . $item->image) }}" alt="image"
                                                width="120px">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('edit-product/' . $item->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="{{ url('delete-product/' . $item->id) }}" class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
