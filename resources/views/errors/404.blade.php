@extends('layouts.main')
@section('content')
    <div class="container d-flex align-items-center justify-content-center mt-5 ">
        <div>
            <div class="font75">Ошибка 404!</div>
            <p class="font_size25 mt-3 mb-4">Эта страница не найдена, мы уже <br> работаем, чтобы ее восстановить!</p>
            <a href="{{route('home')}}"><button class="btn_tat_black">Вернуться на главную</button></a>
            <a href="{{route('home')}}" class="error_link">Вернуться в каталог</a>
        </div>
        <div><img src="{{asset('img/img404.png')}}" alt=""></div>
    </div>
@endsection
