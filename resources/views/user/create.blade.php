@extends('layouts.main')
@section('content')
    <div class="container">
        <h2 class="text-center mb-5 mt-5">Зарегистрироваться</h2>

        <form action="{{ route('user.store') }}" method="POST" class="custom-form bg-light p-4 rounded shadow">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="Введите ваше имя" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Почта</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" placeholder="Введите пароль" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Подтверждение пароля</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                    placeholder="Подтвердите пароль" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg btn-block mt-2">Зарегистрироваться</button>
                <a href="{{ route('login') }}" class="btn btn-secondary btn-lg mt-2">Войти</a>
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
