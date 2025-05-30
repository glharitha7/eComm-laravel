@extends('master')
@section('content')
<div class="custom-product container my-4">
    <h4 class="mb-4">My Orders</h4>

    @if($orders->isEmpty())
        <div class="alert alert-info text-center">
            You have no orders yet.
        </div>
    @else
        @foreach($orders as $item)
        <div class="row searched-item align-items-center mb-4 p-3 shadow-sm rounded bg-white">
            <!-- Product Image -->
            <div class="col-md-6 col-sm-4 col-12 mb-2 mb-sm-0 text-center">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" alt="{{$item->name}}" class="img-fluid trending-image">
                </a>
            </div>

            <!-- Product Info -->
            <div class="col-md-6 col-sm-5 col-12">
                <h5 class="mb-1">Name : {{$item->name}}</h5>
                <p class="text-muted">Delivery Status : {{$item->status}}</p>
                <p class="text-muted">Address : {{$item->address}}</p>
                <p class="text-muted">Payment Status : {{$item->payment_status}}</p>
                <p class="text-muted">Payment Method : {{$item->payment_method}}</p>
            </div>
        </div>
        @endforeach
    @endif
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
