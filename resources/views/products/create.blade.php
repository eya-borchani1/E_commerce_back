@extends('layouts.app')
@section('content')
    <h1>Add Product</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        Name: <input type="text" name="name"><br>
        Prix: <input type="text" name="prix"><br>
        <button type="submit">Save</button>
    </form>
@endsection