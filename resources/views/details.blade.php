@extends('/master')
@section('content')
<div class="container custom-details my-3">
    <div class="row">
        <div class="col-sm-6">
            <img class="" src="/{{ $products['gallery'] }}" alt="pic" height="250px" width="400">
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                {{-- <a href="/">Back To Home</a> --}}
                <h2 class="text-danger">Name: {{ $products['name'] }}</h2>
                <h3 class="text-muted">Price: {{ $products['price'] }}</h3>
                <h4 class="text-muted">Category: {{ $products['category'] }}</h4>
                <h5 class="text-muted">Description: {{ $products['description'] }}</h5>
            </div>

            <div>
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $products['id'] }}">
                    <button class="btn btn-warning">Add to Cart</button>
                </form>
                <form class="mt-4" action="/single_order" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $products['id'] }}">
                    <button class="btn btn-success">Buy Now</button>
                </form>
                {{-- <a href="/single_order" class="btn btn-success mt-4">Buy Now</a> --}}
            </div>
        </div>
    </div>
</div>
@endsection
