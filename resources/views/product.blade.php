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
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $item['gallery'] }}" class="d-block slider-img" alt="{{ $item['name'] }}">
                    <div class="carousel-caption d-none d-md-block slider-text">
                        <h5>{{ $item['name'] }}</h5>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </div>
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

    <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach($products as $item)
        <div class="trending-item">
            <img class="trending-image" src="{{ $item['gallery'] }}" alt="Product image">
            <div class="">
                <h5>{{ $item['name'] }}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
