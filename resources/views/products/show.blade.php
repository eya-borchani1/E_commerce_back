@extends('layouts.app')
@section('content')
    <h1>{{ $product->name }}</h1>
    <p>Prix: {{ $product->prix }}</p>
    <a href="{{ route('products.edit', $product) }}">Edit</a>
    <a href="{{ route('products.index') }}">Back to list</a>
@endsection