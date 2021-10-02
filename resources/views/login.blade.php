@extends('master')
@section('content')
<div class="conainer mt-4 custom-login">
    <div class="row container-fluid">
        <div class="col-6 offset-3">
            <form action="login" method="post">
                @csrf
                <div class="form-group">
                    <label for="lemail">Email Address</label>
                    <input class="form-control" type="email" name="lemail" id="lemail">
                    <small class="form-text text-muted">we'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="lpassword">Password</label>
                    <input class="form-control" type="password" name="lpassword" id="lpassword">
                </div>
                <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
