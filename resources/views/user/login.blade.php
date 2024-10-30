@extends('layouts.main')
@section('content')
    <div class="container">
        <h2 class="text-center mb-5 mt-5">Войти</h2>

        <form action="{{ route('login.auth') }}" method="POST" class="custom-form bg-light p-4 rounded shadow">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Почта</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" 
                       placeholder="name@example.com" required value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                       id="password" placeholder="Введите пароль" required>
            </div>

            <div class="mb-3 form-check">
                <input name="remember" class="form-check-input" type="checkbox" id="remember">
                <label class="form-check-label" for="remember">
                    Запомнить меня
                </label>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg btn-block mt-2">Войти</button>
                <a href="{{ route('register') }}" class="btn btn-secondary btn-lg mt-2">Зарегистрироваться</a>
                {{-- <a href="{{ route('password.request') }}" class="btn btn-secondary btn-lg mt-2">Забыли пароль?</a> --}}
            </div>
        </form>
    </div>

    <style>
        /* Стили только для формы */
        .custom-form {
            margin-top: 50px;
            margin-bottom: 50px;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .custom-form h2 {
            color: #343a40;
        }
    </style>
@endsection
