<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap css link --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- custom css Link--}}
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
    <title>E-Commerce_Project</title>
</head>
<body>

    {{ View::make('header') }}

    @yield('content')

    {{ View::make('footer') }}

    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        $(document).ready(function() {

        })
    </script>
</body>
</html>
