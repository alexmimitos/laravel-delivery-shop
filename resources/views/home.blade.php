@extends('layouts.app')

@section('content') 

<h1> Hello i am {{ $name }}</h1>

<p>This is my first Blade page.</p>

<p>My name is {{ $name }} and I am {{ $age }} years old. I live in {{ $city }} and I work as a {{ $profession }}.</p>

@if($age >= 18)
    <p>You are an adult.</p>
@else
    <p>You are underage.</p>
@endif

<h2>Services</h2>

@foreach($products as $product)

    <h3>{{ $product['name'] }}</h3>

    <p>Price: {{ $product['price'] }} €</p>

    <p>Stock: {{ $product['stock'] }}</p>

    @if($product['stock'] > 0)
        <p>✅ In Stock</p>
    @else
        <p>❌ Out of Stock</p>
    @endif

    <hr>

@endforeach

@endsection