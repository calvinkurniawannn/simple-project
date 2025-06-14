@extends('main.main')

@section('title', 'Shop')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/content/shop.css') }}">
@endsection

@section('content')
    <section class="home">
        <div class="container">
            <div class="home-wrapper">
                <h1>Welcome to BookStore</h1>
                <p>Your one-stop place to find amazing books!</p>
            </div>
            <div class="product-wrapper">
                <table class="product-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $product->name }}</td>
                                <td>${{ number_format($product->price, 2) }}</td>
                                <td>
                                    <a href="{{ route('product.detail', $product->id) }}" class="detail-btn">View Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
