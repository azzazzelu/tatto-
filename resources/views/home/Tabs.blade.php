<div class="product-tabs container mt-5 ">
    <ul class="tab-links">
        <li class="active"><a href="#hits">Хиты продаж</a></li>
        <li><a href="#popular">Самые популярные</a></li>
        <li><a href="#new">Новые поступления</a></li>
        <li><a href="#sale">Акционные товары</a></li>
    </ul>

    <div class="tab_cat-content">
        <div id="hits" class="tab_cat active">

            <div class="Card_body">
                <div class="card">
                    <img src="https://via.placeholder.com/300" alt="Product Image">
                    <div class="card-title">Название товара 1</div>
                    <div class="card-price">Цена: 1000 руб.</div>
                    <button class="add-to-cart">Добавить в корзину</button>
                </div>

                
            </div>
        </div>

        <div id="popular" class="tab_cat">
            <h2>Самые популярные</h2>
            <p>Самые запрашиваемые товары на сайте.</p>

            <p>Всем известна организация <abbr title="Всемирная организация здравоохранения">ВОЗ</abbr>, которая
                занимается охраной здоровья населения.</p>

            <!-- Здесь разместите товары -->
        </div>

        <div id="new" class="tab_cat">
            <h2>Новые поступления</h2>
            <p>Недавно добавленные товары.</p>
            <address>
                <strong>Имя Фамилия</strong><br>
                Название компании<br>
                Улица, дом 123<br>
                Город, Штат, Почтовый код<br>
                <a href="mailto:example@example.com">example@example.com</a><br>
                Телефон: <a href="tel:+1234567890">+1 (234) 567-890</a>
            </address>
            <article>
                <header>
                    <h2>Заголовок статьи</h2>
                    <p>Автор: Иван Иванов | Дата: 25 октября 2023</p>
                </header>
                <p>Это пример параграфа, который представляет основное содержание статьи. Здесь можно рассказать о
                    различных аспектах темы, углубиться в детали и предоставить читателям полезную информацию.</p>
                <p>Вы можете включать дополнительные параграфы, изображения и другие элементы, чтобы сделать статью
                    более информативной и привлекательной.</p>
                <footer>
                    <p>Теги: веб-разработка, HTML, семантика</p>
                </footer>
            </article>


            <!-- Здесь разместите товары -->
        </div>

        <div id="sale" class="tab_cat">
            <h2>Акционные товары</h2>
            <p>Товары со скидками и акциями.</p>
            <!-- Здесь разместите товары -->
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <button class="btn_tat">Центрированная кнопка</button>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tabLinks = document.querySelectorAll('.tab-links a');
        const tabs = document.querySelectorAll('.tab_cat');

        tabLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Скрываем все табы
                tabs.forEach(tab => {
                    tab.classList.remove('active');
                });

                // Убираем активный класс у всех ссылок
                tabLinks.forEach(link => {
                    link.parentElement.classList.remove('active');
                });

                // Показываем выбранный таб
                const targetTab = document.querySelector(this.getAttribute('href'));
                targetTab.classList.add('active');

                // Добавляем активный класс к текущей ссылке
                this.parentElement.classList.add('active');
            });
        });
    });
</script>
