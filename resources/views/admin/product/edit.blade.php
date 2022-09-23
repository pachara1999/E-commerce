@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="">Category Type</label>
                        <select name="cate_id" id="cate_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ ($category->id == $product->cate_id) ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Product Name</label>
                        <input type="text" value="{{ $product->name }}" name="name" id="" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Slug</label>
                        <input type="text" value="{{ $product->slug }}" name="slug" id="" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Small Description</label>
                        <textarea name="small_description" id="" cols="30" rows="10" class="form-control">{{ $product->small_description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $product->description }}</textarea>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Original Price</label>
                        <input type="text" value="{{ $product->original_price }}"name="original_price" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Selling Price</label>
                        <input type="text" value="{{ $product->selling_price }}" name="selling_price" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Tax</label>
                        <input type="text" value="{{ $product->tax }}" name="tax" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Quantity</label>
                        <input type="text" value="{{ $product->qty }}" name="qty" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{ ($product->status) ? 'checked' : '' }} class="form-check-inline ml-3">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending" {{ ($product->trending) ? 'checked' : '' }} class="form-check-inline ml-3">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <textarea name="meta_title" id="" cols="30" rows="10" class="form-control">{{ $product->meta_title }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" id="" cols="30" rows="10" class="form-control">{{ $product->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" id="" cols="30" rows="10" class="form-control"> {{ $product->meta_description }}</textarea>
                    </div>
                    @if ($product->image)
                        <div class="col-md-12 mb-3">
                            <img src="{{ asset('assets/uploads/products/' . $product->image) }}" width="100px"
                                alt="CategotyImage">
                        </div>
                    @endif
                    <div class="col-md-12 mb-3">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3 text-right">
                        <button type="submit" class="btn btn-warning"><i class="fa-solid fa-floppy-disk"></i> Update</button>
                        <a href="{{ url('products') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
