
@extends('layouts.app')

@section('content')

<h1>{{ $service['name'] }}</h1>

<p>Price: {{ $service['price'] }} €</p>

<p>Stock: {{ $service['stock'] }}</p>

@endsection