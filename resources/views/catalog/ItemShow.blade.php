@extends('layouts.main')
@section('content')
    <div class="container">
        itemShow
        <img src="{{$product->img}}" alt=" {{$product->name}}">
        {{$product->name}}
    </div>
@endsection
{{-- <img src="data:image/jpeg;base64,{{ base64_encode($lecture->image) }}" class="card-img-top" --}}
