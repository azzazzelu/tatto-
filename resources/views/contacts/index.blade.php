@extends('layouts.main')
@section('content')
    <div class="container mb-5">
        <h1 class="font60 mt-5 ">Контакты</h1>
        <h1 class="font_size25">Офис компании</h1>
        <div class="office">
            <div class="officeLeft">
                <div class="containerofficeLeft mt-4">
                    <h1 class="font60">8(800)600-61-91</h1>
                    <p class="font_size17">Понедельник – пятница: с 07:00 до 15:00 (МСК)
                        Звонок бесплатный!</p>
                    <p class="font_size17">Ваши заказы, звонки и обращения обрабатываются в рабочее время. Если Вы обратитесь
                        к нам в
                        иное время - мы
                        свяжемся с Вами на следующий день. Мы обращаем внимание, в каком часовом поясе Вы находитесь, и не
                        звоним в
                        неудобное для Вас время.</p>
                    <p class="font_size17">
                        Пункт выдачи в г. Благовещенске, Калинина 107-202, стоимость доставки 300 руб.,
                        при оформлении заказа до 15.00 доставка в день заказа. <br>
                        ООО «Посылка»<br>
                        ОГРН: 1192036006645
                    </p>
                </div>

            </div>
            <div class="officeRight">
                <div class="containerofficeRight">
                    <div class="d-flex mt-4">
                        <img src="{{ asset('img/photoContacts.png') }}" alt="">
                        <h1 class="font_size20">Тех. поддержка <br>
                            Мария</h1>
                    </div>
                    <div class="d-flex font_size17 mt-4"><img src="{{ asset('svg/CallBlack.svg') }}"
                            alt="">8(963)848-84-00</div>
                    <div class="d-flex font_size17 mt-4"><img src="{{ asset('svg/mailBlack.svg') }}"
                            alt="">mariya@28opt.ru</div>
                    <p class="font_size17 mt-4">Обратитесь в нашу поддержку, если у Вас возникли какие-либо вопросы
                        по Вашему заказу, либо Вы не
                        можете собрать и настроить Ваше тату-оборудование. Мы поможем.
                    </p>
                </div>
            </div>
        </div>
        {{-- ДОДЕЛАТЬ МЕНЕДЖЕРОВ ПРИ ЖЕЛАНИИ --}}
    </div>
@endsection
