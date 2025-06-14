@extends('main.main')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/content/home.css') }}">
@endsection

@section('content')
    <section class="home">
        <div class="container">
            <div class="home-wrapper">
                <h1>Welcome to BookStore</h1>
                <p>Your one-stop place to find amazing books!</p>
            </div>
        </div>
    </section>
@endsection
