@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>Промокоды</h1>
        <div class="row mt-5">
            {{-- @foreach ($cards as $card) --}}
            {{-- <div class="col-md-4 mb-4">
                    <div class="card" style="width: 392px; height: 604px;">
                        <img src="{{ $card->image }}" class="card-img-top" style="width: 392px; height: 230px;" alt="{{ $card->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $card->title }}</h5>
                            <p class="card-text">{{ $card->description }}</p>
                            <a href="{{ $card->button_link }}" class="btn btn-primary">Перейти</a>
                        </div>
                    </div>
                </div> --}}
            <div class="col-md-4 mb-4">
                <div class="cardPromo">
                    <img src="{{ asset('img/promo.png') }}" class="cardPromoImg" alt="...">
                    <div class="cardPromo_body mt-3">
                        <h5 class="font_size25">Пакет “Лето”</h5>
                        <p class="font_size17">Самое жаркое лето века не хочет уходить и давит Вам новые краски до конца
                            сезона.
                            При покупке от 5500₽ Вы получите скидку 1% на абсолютно любой товар! Успей окрасить свою жизнь
                            касками лета!</p>
                    </div>
                    {{-- <button onclick="copyToClipboard('{{ $promocode }}')">Скопировать</button> --}}
                    <div class="btn_container mt-5">
                        <button onclick="copyToClipboard('ТАТУ')" class="btn_tat_promo">Скопировать промокод</button>
                    </div>


                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
    <script>
        function copyToClipboard(promocode) {
            navigator.clipboard.writeText(promocode).then(() => {
                alert('Промокод ' + promocode + ' скопирован !');
            }).catch(err => {
                console.error('Ошибка при копировании: ', err);
            });
        }
    </script>
@endsection
