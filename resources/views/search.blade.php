@extends('master')
@section('content')
<div class="container custom-search my-3">

    <div class="row">
        <div class="col-sm-4"><a href="#">filter</a>
        </div>
        <div class="col-sm-6">
            <div class="search-wrapper my-3 w-50 mx-3">
                <h3 class="text-decoration-underline">Result for Products</h3>
                @foreach($products as $key => $value)
                    <a href="details/{{ $value['id'] }}">
                        <div class="search-item mt-3">
                            <img class="" src="{{ $value['gallery'] }}" alt="pic" srcset="">
                            <div class="mt-2">
                                <h4 class="">{{ $value['name'] }}</h4>
                                <h6 class="text-dark">{{ $value['description'] }}</h6>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
