<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
</body>
<style>
    img.slider-img{
        height: 400px;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
        border-radius: 50%;
    }
    
    .slider-text {
        background-color: #35443585 !important;
    }
    .trending-image {
        height: 150px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
    }

    .product-card:hover {
        transform: translateY(-4px);
        transition: 0.3s ease;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .trending-item {
        float: left;
        width: 20%;
    }
    .trending-wrapper {
        margin: 30px;
    }
    .detail-img {
    max-height: 400px;
    object-fit: contain;
    }

</style>
