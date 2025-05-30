@extends('master')
@section('content')
<div class="custom-product container my-4">
    <h4 class="mb-4">Results for Products</h4>

    @foreach($products as $item)
    <div class="row searched-item align-items-center mb-4 p-3 shadow-sm rounded bg-white">
        <!-- Product Image -->
        <div class="col-md-3 col-sm-4 col-12 mb-2 mb-sm-0 text-center">
            <a href="detail/{{$item->id}}">
                <img src="{{$item->gallery}}" alt="{{$item->name}}" class="img-fluid trending-image">
            </a>
        </div>

        <!-- Product Info -->
        <div class="col-md-6 col-sm-5 col-12">
            <h5 class="mb-1">{{$item->name}}</h5>
            <p class="text-muted">{{$item->description}}</p>
        </div>

        <!-- Remove Button -->
        <div class="col-md-3 col-sm-3 col-12 text-sm-end text-start mt-2 mt-sm-0">
        <a href="/removecart/{{$item->cart_id}}">
            <button type="submit" class="btn btn-warning w-100 w-sm-auto">Remove from Cart</button>
        </a>
        </div>
    </div>
    @endforeach
</div>
    <div class="container my-5 text-center">
        <a class="btn btn-success btn-lg px-5" href="ordernow">Order Now</a>
    </div>

@endsection

@push('styles')
<style>
    .trending-image {
        max-height: 150px;
        object-fit: cover;
        border-radius: 8px;
    }

    @media (max-width: 576px) {
        .searched-item {
            flex-direction: column;
        }
    }

    .custom-product {
        min-height: 80vh;
    }

    .shadow-sm:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08) !important;
        transform: translateY(-2px);
        transition: all 0.2s ease-in-out;
    }
</style>
@endpush
