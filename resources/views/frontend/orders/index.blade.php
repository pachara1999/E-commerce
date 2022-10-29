@extends('layouts.frontend')

@section('tittle')
    My orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        My Orders
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>Tracking No.</th>
                                <th>Total price</th>
                                <th>Status</th>
                                <th>Tools</th>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->tracking_no }}</td>
                                        <td>{{ $order->total_price }}</td>
                                        <td><?php if($order->status == '0'){ ?> <span class="badge bg-secondary">Pending</span>
                                            <?php }else{ ?> <span class="badge bg-success">Complete</span>
                                            <?php } ?> </td>
                                        <td>
                                            <a href="{{ url('view-order/'. $order->id) }}" class="btn btn-primary"><i
                                                    class="fa-solid fa-circle-info"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
