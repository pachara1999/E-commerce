@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/' . $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" name="name"
                            required="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" value="{{ $category->slug }}" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{ $category->status ? 'checked' : '' }}
                            class="form-check-inline ml-3">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular" {{ $category->popular ? 'checked' : '' }}
                            class="form-check-inline ml-3">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" value="{{ $category->meta_title }}" name="meta_title" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <input type="text" value="{{ $category->meta_keywords }}" name="meta_keywords"
                            class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <input type="text" value="{{ $category->meta_descrip }}" name="meta_descrip"
                            class="form-control">
                    </div>
                    @if ($category->image)
                        <div class="col-md-12 mb-3">
                            <img src="{{ asset('assets/uploads/category/' . $category->image) }}" width="100px"
                                alt="CategotyImage">
                        </div>
                    @endif
                    <div class="col-md-12 mb-3">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3 text-right">
                        <button type="submit" class="btn btn-warning"><i class="fa-solid fa-floppy-disk"></i> Update</button>
                        <a href="{{ url('categories') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
