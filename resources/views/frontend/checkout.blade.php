@extends('layouts.frontend')

@section('tittle')
    Check out
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ url('place-order') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7 align-self-stretch">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h6>Basic Details</h6>
                            <hr>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="">First Name</label>
                                    <input type="text" name="fname" value="{{ Auth::user()->fname }}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lname" value="{{ Auth::user()->lname }}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="">Address 1</label>
                                    <input type="text" name="address1" value="{{ Auth::user()->address1 }}" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Address 2</label>
                                    <input type="text" name="address2" value="{{ Auth::user()->address2 }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="">City</label>
                                    <input type="text" name="city" value="{{ Auth::user()->city }}" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">State</label>
                                    <input type="text" name="state" value="{{ Auth::user()->state }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="">Country</label>
                                    <input type="text" name="country" value="{{ Auth::user()->country }}" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Pin Code</label>
                                    <input type="text" name="pincode" value="{{ Auth::user()->pincode }}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-self-stretch">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h6>Order Details</h6>
                            <hr>
                            <table class="table table-striped">
                                <thead>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->prod_qty }}</td>
                                            <td>{{ $item->products->selling_price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <button class="btn btn-primary float-end">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
@endsection
