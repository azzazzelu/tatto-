@extends('layouts.main')
@section('content')
    @foreach ($products as $product )
        <p>{{$product->name}}</p>
    @endforeach

@endsection
