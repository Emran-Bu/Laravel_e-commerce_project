@extends('master')
@section('content')
<div class="custom-product my-3">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators pb-3">
            <button style="border: none; background:;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button style="border: none; background:;" class="mx-2" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button style="border: none; background:;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-inner">
                @foreach($products as $key => $value)
                <div class="carousel-item {{ $value['id']==1?'active':'' }}">
                    <a href="details/{{ $value['id'] }}">
                        <img src="{{ $value['gallery'] }}" class="d-block w-100" alt="Pic" height="400px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-warning fw-bold fs-2">{{ $value['name'] }}</h5>
                            <p class="text-primary fw-bold fs-4">{{ $value['description'] }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <button style="border: none; background:none;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button style="border: none; background:none;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

    <div class="trending-wrapper my-3">
        <h2 class="mx-3">Trending Products</h2>
        @foreach($products as $key => $value)
            <a href="details/{{ $value['id'] }}">
                <div class="trending-item">
                    <img class="" src="{{ $value['gallery'] }}" alt="pic" srcset="">
                    <h5 class="text-center">{{ $value['name'] }}</h5>
                </div>
            </a>
        @endforeach
    </div>

</div>
@endsection


