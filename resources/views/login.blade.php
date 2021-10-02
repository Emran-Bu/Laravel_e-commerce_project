@extends('master')
@section('content')
<div class="conainer">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="get">
                <div class="form-group">
                    <label for="lemail">Email Address</label>
                    <input class="form-control" type="email" name="lemail" id="lemail">
                    <small class="form-text text-muted">we'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="lpassword">Password</label>
                    <input class="form-control" type="password" name="lpassword" id="lpassword">
                </div>
                <div class="form-group mt-2 form-check">
                    <input class="form-check-input" type="checkbox" name="lcheck" id="lcheck">
                    <label class="form-check-label" for="lcheck">check me out</label>
                </div>
                <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
            </form>
        </div>
    </div>
</div>
<button class="btn btn-danger">click me</button>
@endsection
