<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap css link --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    {{-- custom css Link--}}
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <h3 class="text-warning">master page</h3>
    <button class="btn btn-danger">click me</button>
    <h1>java</h1>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('button').click(function() {
                alert('all set');
            })
        })
    </script>
</body>
</html>