@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row mb-5 mt-5 ">
            @foreach ($products as $product)
                <div class="col-md-3 mb-5">
                    <a href="{{ route('product.show', ['id' => $product->id]) }}">
                        {{-- {{ route('catalog.categories.show', ['categoryList' => 'Наборы для татуировок' ]) }} --}}
                        <div class="card">
                            <img src="{{ $product->img }}" alt="{{ $product->name }}">
                            <div class="card-title">{{ $product->name }}</div>
                            <div class="card-price">{{ $product->price }} Руб</div>
                            @if (Route::has('login'))
                                @auth
                                    <form action="{{ route('item.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn_tatWhite">добавить в корзину</button>
                                    </form>
                                @endauth
                            @endif

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
{{-- <img src="data:image/jpeg;base64,{{ base64_encode($lecture->image) }}" class="card-img-top" --}}
