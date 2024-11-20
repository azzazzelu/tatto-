<header class="bg-black text-white">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-2 pt-3 ">
            <div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('svg/Call.svg') }}" alt="">
                    <h1 class="font_Jost font_size15">+7 952 552-52-52</h1>
                </div>
                <div class="d-flex " style="gap: 10px">
                    <p class="font_size12 undermessage">Viber </p>
                    <p class="font_size12 undermessage">Whats App </p>
                    <p class="font_size12 undermessage">Telegram</p>
                </div>
            </div>

            <div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('svg/email.svg') }}" alt="">
                    <h1 class="font_Jost font_size15 ms-2">Mr.Driskell@mail.ru</h1>
                </div>
            </div>

            <img src="{{ asset('img/logo.png') }}" alt="">

            <div class="d-flex align-items-center justify-content-center align-items-center">
                <h1 class="font_Jost font_size15 me-2">37 280 ₽</h1>
                <img src="{{ asset('svg/basket.svg') }}" alt="">
            </div>
            <img src="{{ asset('svg/likes.svg') }}" alt="">
            @auth
                @if (auth()->user()->admin)
                    <div class="d-flex align-items-center">
                        <a class="nav-link" href="{{ route('admin') }}">Админ-панель</a>
                    </div>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin') }}">Админ-панель</a>
                    </li> --}}
                @endif
            @endauth
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('register') }}">
                        <img src="{{ asset('svg/profil.svg') }}" alt="">
                    </a>
                    <a href="{{ route('logout') }}"><img src="{{ asset('svg/logout.svg') }}" alt=""></a>
                @else
                    <a href="{{ route('register') }}"><img src="{{ asset('svg/profil.svg') }}" alt=""></a>
                    <a href="{{ route('login') }}"><img src="{{ asset('svg/login.svg') }}" alt=""></a>
                @endauth
            @endif
        </div>
        <div class="hr_header"></div>
        <div class="d-flex justify-content-between justify-content-center align-items-center pb-3 mt-2">
            <div class="sectionsHeader d-flex justify-content-center" id="catalog-btn">
                <h1 class="font_size25">Каталог</h1>
                <img src="{{ asset('svg/Freeline.svg') }}" style="margin-bottom: -10px; margin-left:10px"
                    alt="">
            </div>
            <div class=" d-flex justify-content-between justify-content-center align-items-center" style="gap: 60px">
                <a href="{{ route('promoCodes') }}" class="headA sectionsHeader font_size17">Промокоды</a>
                <a href="#" class="headA sectionsHeader font_size17">Скидки</a>
                <a href="#" class="headA sectionsHeader font_size17">Помощь</a>
                <a href="{{ route('home') }}" class="headA sectionsHeader font_size17">О нас</a>
                <a href="{{ route('contacts') }}" class="headA sectionsHeader font_size17">Контакты</a>
            </div>
        </div>
    </div>
</header>

<!-- Всплывающее окно для категорий -->
<div class="popup" id="categories-popup" style="display: none;">
    <div class="lineheader">
        <img src="{{ asset('img/lineheader.png') }}" alt="">
    </div>
    <div class="popup-content tab">
        <span class="close" id="close-popup">&times;</span>
        <input checked id="tab-btn-1" class="tab_input" name="tab-btn" type="radio" value="">
        <label for="tab-btn-1" class="tab_title_1 tab_title">По категории</label>


        <input id="tab-btn-2" class="tab_input" name="tab-btn" type="radio" value="">
        <label for="tab-btn-2" class="tab_title_2 tab_title">По брендам</label>
        <br>
        <img src="{{ asset('svg/LineCatalog.svg') }}" id="tab_upline_1" class="tab_upline tab_upline_1 "
            alt="">
        <img src="{{ asset('svg/LineCatalog.svg') }}" id="tab_upline_2" class="tab_upline tab_upline_2" alt="">
        <hr class="catalog_hr">
        {{-- 
        <div class="tab-content " id="content-1">
            <div class="d-flex">
                <ul class="list left-list">
                    <li>Новинки</li>
                    <li>Наборы для татуировок</li>
                    <li>Тату машинки</li>
                    <li>Тату краски</li>
                    <li>Тату иглы</li>
                    <li>Тату держатели</li>
                </ul>
                <ul class="list right-list">
                    <li>Тату наконечники</li>
                    <li>Блоки питания</li>
                    <li>Педали и провода</li>
                    <li>Аксессуары</li>
                    <li>Принтеры и планшеты</li>
                    <li>Защита, ёмкости, расходные материалы</li>
                </ul>
            </div>
        </div> --}}

        <div class="tab-content " id="content-1">
            <div class="d-flex">
                @php
                    use App\Models\Brands;
                    use App\Models\Category;
                    // Преобразуем коллекцию в массив
                    $categories = Category::all();
                    $brands = Brands::all();
                    $chunkedCategories = array_chunk($categories->toArray(), ceil($categories->count() / 2));
                @endphp

                @foreach ($chunkedCategories as $index => $chunk)
                    <ul class="list @if ($index === 0) left-list @else right-list @endif">
                        @foreach ($chunk as $category)
                            <li><a
                                    href="{{ route('catalog.categories.show', ['categoryList' => $category['name']]) }}">{{ $category['name'] }}</a>
                            </li>
                            <!-- Используйте $category['name'] вместо $category->name -->
                        @endforeach
                    </ul>
                @endforeach
            </div>

        </div>

        {{-- <div class="tab-content " id="content-2">

            <div class="d-flex">
                <ul class="list left-list">
                    <li>Aliance</li>
                    <li>Aloe Tattoo</li>
                    <li>Anchored by Nikko Hurtado</li>
                    <li>BC Invention Company</li>
                    <li>Beauty Bit</li>
                    <li>Bishop Rotary</li>
                    <li>Burlak Tattoo Machines</li>
                    <li>Cheyenne HAWK</li>
                    <li>Critical Tattoo</li>
                    <li>Dermalize Protective</li>
                    <li>Dynamic Colors</li>
                </ul>
                <ul class="list right-list">
                    <li>EGO</li>
                    <li>Bez’s Rotary</li>
                    <li>Eikon Device Inc.</li>
                    <li>Electrum</li>
                    <li>EQUALISER by Kwadron</li>
                    <li>Eternal</li>
                    <li>Excalibur</li>
                    <li>Fantasia Art Supply</li>
                    <li>FKirons</li>
                    <li>Hanafy</li>
                    <li>HM Tattoo Machines</li>
                    <li>Ink Machines</li>
                </ul>
                <ul class="list left-list">
                    <li>InkJecta Tattoo Machine</li>
                    <li>Intenze</li>
                    <li>JACK & ALEXX</li>
                    <li>Kashalot Rotary</li>
                    <li>Kuro Sumi</li>
                    <li>KWADRON™</li>
                    <li>Lauro Paolini</li>
                    <li>Lithuanian Irons</li>
                    <li>Lucky Supply</li>
                    <li>Mercator Medical</li>
                    <li>Millenium</li>
                    <li>Mom’s Ink</li>
                </ul>
                <ul class="list right-list">
                    <li>NEMESIS</li>
                    <li>Nocturnal Tattoo Ink</li>
                    <li>Panthera</li>
                    <li>Perma Blend</li>
                    <li>Precision Needles</li>
                    <li>Precision Tattoo Supply</li>
                    <li>Premier Products</li>
                    <li>Radiant</li>
                    <li>Reprofx®</li>
                    <li>Spirit™</li>
                    <li>Right Stuuf</li>
                    <li>S8TATTOO</li>
                </ul>
                <ul class="list left-list">
                    <li>Skinductor</li>
                    <li>Starbrite</li>
                    <li>Tattoorevive</li>
                    <li>TURANIUM</li>
                    <li>Fabrika Rotary</li>
                    <li>UNI–CART</li>
                    <li>Vlad Blad</li>
                    <li>World Famous</li>
                    <li>World Famous Tattoo Ink</li>
                    <li>2K2BT</li>
                    <li>БРОВИ </li>
                    <li>КРАСКА zTattoo Ink</li>
                </ul>

            </div>
        </div> --}}
        <div class="tab-content " id="content-2">
            <div class="d-flex">
                @php
                    $chunkedBrands = array_chunk($brands->toArray(), ceil($brands->count() / 5));
                @endphp

                @foreach ($chunkedBrands as $index => $chunk)
                    <ul class="list @if ($index % 2 === 0) left-list @else right-list @endif">
                        @foreach ($chunk as $brand)
                            {{-- <li>{{ $brand['name'] }}</li> --}}
                            <li><a
                                    href="{{ route('catalog.brands.show', ['brandList' => $brand['name']]) }}">{{ $brand['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>




<script>
    document.getElementById('catalog-btn').addEventListener('click', function() {
        document.getElementById('categories-popup').style.display = 'flex';
    });

    document.getElementById('close-popup').addEventListener('click', function() {
        document.getElementById('categories-popup').style.display = 'none';
    });


    window.addEventListener('click', function(event) {
        const popup = document.getElementById('categories-popup');
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    });
</script>
