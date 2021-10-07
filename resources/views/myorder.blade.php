<?php
    use App\Http\Controllers\productController;
    $total = 0;
    if (Session::has('user')) {
        $total = productController::show_CartItem();
    }
?>
@extends('master')
@section('content')
@if($total==0)
    <div class="" style="height: 85vh; width:500px; margin: 0 auto">
        <div class="alert alert-danger d-inline-block mt-5">
            <h3>No Order Found.</h3>     
        </div>
    </div>
@else
    <div class="orderlist-wrapper my-3">
        <h3 class="text-decoration-underline text-center">Order List</h3>
        @foreach($orders as $key => $value)
            <div class="row offset-sm-2  my-5">
                <div class="col-sm-3 orderlist-col-section">
                    <a class="text-decoration-none" href="details/{{ $value->id }}">
                        <div class="orderlist-item mt-3">
                            <img class="img-fluid" src="{{ $value->gallery }}" alt="pic"  srcset="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 mx-5 orderlist-col-section">
                    <a class="text-decoration-none" href="details/{{ $value->id }}">
                        <div class="orderlist-item mt-3">
                            <div class="mt-2">
                                <h4 class="">{{ $value->name }}</h4>
                                <h6 class="text-dark">Product Price : <span style="font-weight: initial !important;">{{ $value->price }}</span></h6>
                                <h6 class="text-dark">Delivery Status : <span style="font-weight: initial !important;">{{ $value->status }}</span></h6>
                                <h6 class="text-dark">Payment method : <span style="font-weight: initial !important;">{{ $value->payment_method }}</span></h6>
                                <h6 class="text-dark">Payment Status : <span style="font-weight: initial !important;">{{ $value->payment_status }}</span></h6>
                                <h6 class="text-dark">Address : <span style="font-weight: initial !important;">{{ $value->address }}</span></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 orderlist-col-section">
                    <div class="mb-2">
                        <a href="details/{{ $value->id }}" class="btn btn-warning">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif
@endsection
