@extends("master")
@section("content")
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        
        <!-- Indicators -->
        <div class="carousel-indicators">
            @foreach($products as $index => $item)
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        <!-- Carousel items -->
        <div class="carousel-inner">
            @foreach($products as $item)
                <a href="detail/{{$item['id']}}">
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ $item['gallery'] }}" class="d-block slider-img" alt="{{ $item['name'] }}">
                        <div class="carousel-caption d-none d-md-block slider-text">
                            <h5>{{ $item['name'] }}</h5>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5">
        <h3 class="mb-4">Trending Products</h3>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
            @foreach($products as $item)
            <div class="col">
                <a href="detail/{{ $item['id'] }}" class="text-decoration-none text-dark">
                    <div class="card h-100 shadow-sm border-0 product-card">
                        <img src="{{ $item['gallery'] }}" class="card-img-top img-fluid trending-image" alt="{{ $item['name'] }}">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-1">{{ $item['name'] }}</h6>
                            <p class="card-text text-muted small">{{ \Illuminate\Support\Str::limit($item['description'], 50) }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
