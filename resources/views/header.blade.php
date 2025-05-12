<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-Comm</a>
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
          <a class="nav-link" href="/orders">Orders</a>
        </li>
        <li class="nav-item">
          <form class="d-flex ms-3" role="search" method="GET" action="/search">
            <input class="form-control me-2" type="search" name="query" placeholder="Search orders..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </li>
      </ul>

      <div class="ms-auto">
        <a class="btn btn-outline-light" href="/cartlist">
          Cart
          <span class="badge bg-light text-dark">{{ $cartItemCount ?? 0 }}</span>
        </a>
      </div>
    </div>
  </div>
</nav>
