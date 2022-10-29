@extends('layouts.frontend')

@section('tittle')
    My orders
@endsection

@section('content')
    <style type="text/css">
        .order-details label{
            font-size: 12px;
            font-weight: 700;
        }
        .order-details div{
            font-size: 14px;
            padding: 5px !important;
        }
    </style>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Order View 
                            <a href="{{ url('my-orders') }}" class="btn btn-warning text-white float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Shipping Details</h4>
                                <hr>
                                <label for="" class="mt-2">First Name</label>
                                <div class="border p-2">{{ $orders->fname }}</div>
                                <label for="" class="mt-2">Last Name</label>
                                <div class="border p-2">{{ $orders->lname }}</div>
                                <label for="" class="mt-2">Email</label>
                                <div class="border p-2">{{ $orders->email }}</div>
                                <label for="" class="mt-2">Contact No.</label>
                                <div class="border p-2">{{ $orders->phone }}</div>
                                <label for="" class="mt-2">Address</label>
                                <div class="border p-2">
                                    {{ $orders->address1 }},<br>
                                    {{ $orders->address2 }},<br>
                                    {{ $orders->city }},<br>
                                    {{ $orders->state }},
                                    {{ $orders->country }}
                                </div>
                                <label for="" class="mt-2">Pin code</label>
                                <div class="border p-2">{{ $orders->pincode }}</div>
                            </div>
                            <div class="col-md-6">
                                <h4>Order Details</h4>
                                <hr>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                            <tr>
                                               <td>{{ $item->products->name }}</td>
                                               <td>{{ $item->qty }}</td>
                                               <td>{{ $item->price }}</td>
                                               <td>
                                                    <img src="{{ asset('assets/uploads/products/'. $item->products->image) }}" width="70px">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Grand Total : <span class="float-end">{{ $orders->total_price }}</span> </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
