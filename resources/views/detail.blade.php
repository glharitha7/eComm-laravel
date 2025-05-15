@extends('master')

@section('content')
<div class="container py-5">
    <div class="row g-5 align-items-start">
        <!-- Product Image -->
        <div class="col-lg-6 col-md-6 col-12 text-center">
            <img src="{{ $product['gallery'] }}" alt="{{ $product['name'] }}" class="img-fluid rounded shadow-sm" style="max-height: 400px;">
        </div>

        <!-- Product Details -->
        <div class="col-lg-6 col-md-6 col-12">
            <a href="/" class="btn btn-outline-secondary mb-3">← Go Back</a>
            <h2 class="fw-bold">{{ $product['name'] }}</h2>
            <h4 class="text-success mt-3 mb-2">Price: ₹{{ $product['price'] }}</h4>
            <p class="text-muted mb-4">{{ $product['description'] }}</p>

            <div class="mb-3">
                <span class="badge bg-info text-dark">Category: {{ $product['category'] }}</span>
            </div>

            <!-- Actions -->
            <div class="d-grid gap-2 d-md-block">
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-primary me-2">Add to Cart</button>
                </form>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>

    <!-- Optional Section: Features or Reviews -->
     
    <div class="row mt-5">
        <div class="col-12">
            <h5>Product Features</h5>
            <ul>
                <li>High quality material</li>
                <li>1-year warranty included</li>
                <li>Free shipping available</li>
            </ul>
        </div>
    </div>
    
</div>
@endsection
