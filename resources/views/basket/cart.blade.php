@extends('layouts.main')
@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if (count($cartItems))
            <h1>Моя корзина</h1>
            <ul>
                @foreach ($cartItems as $item)
                    <li>
                        {{ $item->product->name }}
                        {{ $item->quantity }}
                        <form action="{{ route('item.remove', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Удалить</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Ваша корзина пуста.</p>
        @endif
    </div>
@endsection
