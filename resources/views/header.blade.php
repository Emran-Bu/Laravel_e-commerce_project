<?php
    use App\Http\Controllers\productController;
    $total = 0;
    if (Session::has('user')) {
        $total = productController::show_CartItem();
    }
?>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">E-Comm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorder">Orders</a>
          </li>
        </ul>
        <form action="/search" class="d-flex">
          <input class="form-control me-2" name="search" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/cartlist">Cart Item({{ $total }})</a></li>
            @if(Session::has('user'))
            <li class="navbar-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}</a>
                <div class="dropdown-menu text-center" style="top: 72% !important;right: 14% !important;left: unset !important; min-width: 7rem !important; padding: 0 !important">
                    <a class="dropdown-item" href="/logout">Logout</a></li>
                </div>
            </li>
            @else
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            @endif
        </ul>
      </div>
    </div>
  </nav>
