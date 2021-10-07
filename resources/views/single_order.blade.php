@extends('master')
@section('content')
<div class="container mt-4 mb-2">
    <h2 class="text-center mb-5">Buy Summary</h2>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <table class="table table-striped">
                <tr>
                    <th>Price : </th>
                    <td>{{ $total }} Tk.</td>
                </tr>
                <tr>
                    <th>Tax : </th>
                    <td>0 Tk.</td>
                </tr>
                <tr>
                    <th>Delivery : </th>
                    <td>100 Tk.</td>
                </tr>
                <tr>
                    <th>Total Amount : </th>
                    <td>{{ $total+100 }} Tk.</td>
                </tr>
            </table>

            <form action="/single_buynow" method="post">
                @csrf
                <div class="form-group mb-2">
                    <textarea class="form-control" name="address" id="" cols="70" rows="5" placeholder="Type your address details and your comments."></textarea>
                </div>
                <div class="form-group">
                    <label class="mb-1 fw-bold" for="payment">Payment Method : </label>
                    <div class="form-check">
                        <label for="payment" class="form-check-label">
                            <input class="form-check-input" type="radio" value="cash" name="payment" id="">
                            <span>Online Payment</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <label for="payment" class="form-check-label">
                            <input class="form-check-input" type="radio" value="cash" name="payment" id="">
                            <span>EMI Payment</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <label for="payment" class="form-check-label">
                            <input class="form-check-input" type="radio" value="cash" name="payment" id="">
                            <span>Payment on Delivery</span>
                        </label>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-success" type="submit">Confirm Buy Now</button>
                    <a href="/single_order_cancel" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection