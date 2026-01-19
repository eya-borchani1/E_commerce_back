@extends('layouts.app')
@section('content')
    <h1>Edit Product</h1>
    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $product->name }}"><br>
        Prix: <input type="text" name="prix" value="{{ $product->prix }}"><br>
        <button type="submit">Update</button>
    </form>
@endsection