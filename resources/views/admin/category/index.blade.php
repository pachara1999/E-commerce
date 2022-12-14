@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Categories</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('add-category') }}" class="btn btn-success btn-rounded">
                        <i class="fa fa-add"></i> Add Category
                    </a>
                </div>
            </div>

            <div class="row m-2">
                <div class="table-responsive text-center">
                    <table class="table table-bordered table-hover" id="">
                        <thead>
                            <tr>
                                <td width="5%">#</td>
                                <td>Name</td>
                                <td>Description</td>
                                <td width="150px">Image</td>
                                <td>Tools</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1 ; ?>
                            @foreach($categories as $item)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    @if($item->image != null)
                                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="image" width="120px">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('edit-category/'. $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="{{ url('delete-category/'. $item->id) }}" class="btn btn-danger btn-sm">
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
