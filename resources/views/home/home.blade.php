@extends('layouts.main')
@section('content')
  
    @include('home.bg_img')
    @include('home.Tabs')
    @include('home.catalog')
    @include('home.hits')
    {{-- Popular brands tab --}}
    @include('home.aboutUs')
    {{-- Reviews tab --}}
    @include('home.mailing')
@endsection
