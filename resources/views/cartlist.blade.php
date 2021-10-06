@extends('master')
@section('content')
    <div class="cartlist-wrapper my-3">
        <h3 class="text-decoration-underline text-center">Cart List</h3>
        @foreach($products as $key => $value)
            <div class="row offset-sm-2  my-5">
                <div class="col-sm-3 cartlist-col-section">
                    <a class="text-decoration-none" href="details/{{ $value->id }}">
                        <div class="cartlist-item mt-3">
                            <img class="img-fluid" src="{{ $value->gallery }}" alt="pic"  srcset="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 mx-5 cartlist-col-section">
                    <a class="text-decoration-none" href="details/{{ $value->id }}">
                        <div class="cartlist-item mt-3">
                            <div class="mt-2">
                                <h4 class="">{{ $value->name }}</h4>
                                <h6 class="text-dark">{{ $value->description }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 cartlist-col-section">
                    <div>
                        <a href="details/{{ $value->id }}" class="btn btn-warning">Details</a>
                    </div>
                    <div class="my-2">
                        <button class="btn btn-success">Buy Now</button>
                    </div>
                    <div>
                        <a href="/remove_cartItem/{{ $value->id }}" class="btn btn-danger">Remove From Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
