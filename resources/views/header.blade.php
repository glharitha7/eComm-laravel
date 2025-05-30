<?php 
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
  $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorders">Orders</a>
        </li>
        <li class="nav-item">
          <form class="d-flex ms-3" role="search" method="GET" action="/search">
            <input class="form-control me-2" type="search" name="query" placeholder="Search orders..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </li>
      </ul>

      <div class="ms-auto d-flex align-items-center">
        <a class="btn btn-outline-light" href="/cartlist">
          Cart
          <span class="badge bg-light text-dark">{{ $total ?? 0 }}</span>
        </a>

        @if(Session::has('user'))
          <div class="dropdown d-inline-block ms-3">
            <button class="btn btn-outline-light dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Session::get('user')['name'] ?? 'Account' }}
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </div>
        @else
          <a class="btn btn-outline-light ms-3" href="/login">Login</a>
          <a class="btn btn-outline-light ms-3" href="/register">Register</a>
        @endif
      </div>

    </div>
  </div>
</nav>
