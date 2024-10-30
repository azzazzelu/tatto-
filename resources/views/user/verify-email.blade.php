@extends('layouts.main')
@section('content')
    <div class="container">
        <h2 class="text-center mb-5 mt-5">Подтверждение регистрации</h2>

        <div class="alert alert-info text-center mb-5 mt-5" role="alert">
            Спасибо за регистрацию! <br>
            Мы отправили вам на почту письмо для подтверждения учетной записи.
        </div>

        <div class="text-center mb-4">
            Не пришла ссылка?
            <form action="{{ route('verification.send') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link ps-0">
                    Отправить ссылку
                </button>
            </form>
        </div>
    </div>

    <style>
        /* Стили только для страницы подтверждения регистрации */
        .alert {
            background-color: #e9f7fe;
            border-color: #b3e4f9;
            color: #0c5460;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #343a40;
            font-weight: bold;
        }

        .text-center {
            margin-top: 30px;
        }

        .btn-link {
            color: #007bff;
            text-decoration: underline;
        }

        .btn-link:hover {
            color: #0056b3;
            text-decoration: none;
        }
    </style>
@endsection
