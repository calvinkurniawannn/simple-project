@extends('main.main')

@section('title', 'Product Detail')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/content/product-detail.css') }}">
@endsection

@section('content')
    <form action="/" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" value="{{ $product->id }}" readonly>
        </div>

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" step="0.01" required>
        </div>

        <button type="submit">Update Product</button>
    </form>
@endsection
