{% extends "layout.twig.php" %}

{% block content %}
<!-- Первый  экран -->
<div class="header-wrapper" id="header">
    <div class="container">

        <div class="left-block-header">
            <div class="logo-wrapper">
                <img src="/public/images/logo.svg" alt="">ВИПСЕРВИС
            </div>
            <div class="slider-wrapper" uk-slideshow="min-height: 300px; autoplay: true" id="indexSlider">
                <ul class="uk-slideshow-items">
                    <li>
                        <h1><span>-20% в честь</span><br /> открытия нового магазина</h1>
                        <a href="/stock">узнать подробнее</a>
                    </li>
                    <li>
                        <h1><span>уютный дом</span><br /> все скидки с одной картой</h1>
                        <a href="/stock">узнать подробнее</a>
                    </li>
                    <li>
                        <h1><span>до 5 000 руб.</span><br /> скидка новоселам</h1>
                        <a href="/stock">узнать подробнее</a>
                    </li>
                </ul>
            </div>
            <div class="contact-wrapper">
                <a href="tel:8 (8442) 50-69-69">8 (8442) 50-69-69</a>
                <p>Университетский пр-т, д.74</p>
            </div>
        </div>
        <div class="right-block-header">
            <div class="menu-wrapper">
                <ul>
                    <li><a href="/catalog">каталог</a></li>
                    <li><a class="active" uk-toggle="target: #call" href="#">заказать замер</a></li>
                    <li><a href="/contact">где купить</a></li>
                    <li><a href="/stock">акции</a></li>
                    <li class="desc">входные и межкомнатные двери</li>
                    <li class="menu-but">
                        <svg v-on:click="openMenu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 20"><g transform="translate(-1002 -989)"><rect class="a" width="30" height="3" transform="translate(1002 989)"/><rect class="a" width="30" height="3" transform="translate(1002 997.421)"/><rect class="a" width="30" height="3" transform="translate(1002 1005.842)"/></g></svg>
                    </li>
                </ul>
            </div>
            <div class="nav-slider">
                <ul>
                    <li v-for="(item, index) in slideCount"><a href="#" v-bind:class="{'active-slide': index==activeSlide}" v-on:click.prevent="slideShow(index)"></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<div class="uk-offcanvas-content">
    <div id="menu-canvas" uk-offcanvas="flip: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close="ratio: 1.5"></button>

            <nav class="menu-list">
                <ul class="uk-nav">
                    <li class="uk-nav-header">Двери</li>
                    <li><a href="/stock">Акции</a></li>
                    <li><a href="/catalog?type=interior"">Входные</a></li>
                    <li><a href="/catalog?type=entry">Межкомнатные</a></li>
                    <li><a href="/accessories">Аксессуары</a></li>
                    <li><a href="/system-door">Системы</a></li>
                    <li><a href="/guarantee">Гарантийный отдел</a></li>
                </ul>
                <ul class="uk-nav">
                    <li class="uk-nav-header">Наши услуги</li>
                    <li><a href="http://vipservis.su/">Натяжные потолки</a></li>
                    <li><a href="http://split.vipservis.su/">Сплит-системы</a></li>
                    <li><a href="http://okno.vipservis.su/">Окна</a></li>
                    <li><a href="#" uk-toggle="target: #call">Вызвать замерщика</a></li>
                </ul>
                <ul class="uk-nav">
                    <li class="uk-nav-header">Контакты</li>
                    <li><a href="/contact">Где купить</a></li>
                    <li><a href="tel:8 (8442) 50-69-69">8 (8442) 50-69-69</a></li>
                    <li><a href="/contact">Университетский пр-т, д.74</a></li>
                </ul>
            </nav>

        </div>
    </div>
</div>

<!-- Блок выбрать раздел -->
<div class="section-wrapper">
    <div class="container">
        <div class="section section-1">
            <h3>Межкомнатные двери</h3>
            <a href="/catalog?type=interior">Выбрать</a>
        </div>
        <div class="section topic">
            <h2><span>что</span><br /> вас<br /> интересует</h2>
        </div>
        <div class="section section-2">
            <h3>Аксессуары и системы</h3>
            <a href="/accessories">Выбрать</a>
        </div>
        <div class="section section-3">
            <h3>Входные двери</h3>
            <a href="/catalog?type=entry">Выбрать</a>
        </div>
    </div>
</div>

<!-- Блок перейти в каталог -->
<div class="all-select-wrapper">
    <div class="container">
        <div class="all-select">
            <h3>Безграничный <br/> выбор дверей</h3>
            <p>Классика или минимализм, массив или современные отделки, подберите свою идеальную дверь.</p>
            <a href="/catalog" class="yellow-but">Перйти в каталог</a>
        </div>
    </div>
</div>

<!-- Блок межкомнатные двери -->
<div class="door-wrapper">
    <div class="container">
        <div class="door-topic">
            <h2><span>Межкомнатные<br/> двери</span><br/> производители</h2>
        </div>
        <div class="door-section-h door-mk-1">
            <h3>Геона</h3>
            <div class="door-desc">
                <div class="door-desc-wrapper">
                    <p>Двери Geona — продукт европейского уровня, соответствуют санитарно-эпидемиологическим и экологическим требованиям. На межкомнатные двери Фабрика предоставляет паспорт качества, гарантию 7 лет.</p>
                    <a href="/catalog?type=interior&vendor=Геона" class="yellow-but">выбрать дверь</a>
                </div>
            </div>
        </div>
        <div class="door-section-h door-mk-2">
            <h3>Варадор</h3>
            <div class="door-desc">
                <div class="door-desc-wrapper">
                    <p>Однажды мы решили соединить природную грацию дерева, точность машины и труд рук мастера. Получились двери, которыми Varadoor гордится и по сей день. И наша команда продолжает постоянно двигаться вперед.</p>
                    <a href="/catalog?type=interior&vendor=Варадор" class="yellow-but">выбрать дверь</a>
                </div>
            </div>
        </div><div class="door-topic">
            <h2><span>Узнайти о</span><br /> наших акциях</h2>
            <a class="orange-but" href="/stock">посмотреть</a>
        </div>
    </div>
</div>

<!-- Блок лидеры продаж и новые поступления -->
<div class="hit-wrapper">
    <div class="container">
        <div class="hit">
            <h3><span>Лидеры</span> продаж</h3>
            <div class="slide-hit" uk-slider="sets: true">
                <ul class="uk-slider-items">
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                </ul>
                <div class="door-nav">
                    <a href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a href="#" uk-slidenav-next uk-slider-item="next"></a>
                    <a class="more-product" href="/catalog?type=interior">больше товаров</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="hit">
            <h3><span>Новые</span> поступления</h3>
            <div class="slide-hit" uk-slider="sets: true">
                <ul class="uk-slider-items">
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                </ul>
                <div class="door-nav">
                    <a href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a href="#" uk-slidenav-next uk-slider-item="next"></a>
                    <a class="more-product" href="/catalog?type=interior">больше товаров</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Блок карта главной страницы -->
<div class="index-map-wrapper">
    <div class="container">
        <div class="index-map">
            <h3>Фирменные <br /> салоны</h3>
            <p>Познакомьтесь с широким выбром дверей ВИПСЕРВИС в атмосфере внимания и профессиональных знаний</p>
            <a href="/contact" class="yellow-but">Посмотреть на карте</a>
        </div>
    </div>
    <div class="map-position">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0bc5e0457caf1bc71c9a50ffd5635e4c5ea561e0e514decec0d707a59bd069cc&amp;width=100%25&amp;height=312&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</div>

<!-- Блок входные двери -->
<div class="door-wrapper">
    <div class="container">
        <div class="door-topic">
            <h2><span>Входные двери<br/> двери</span><br/> производители</h2>
        </div>
        <div class="door-section-h door-vh-1">
            <h3>Интекрон</h3>
            <div class="door-desc">
                <div class="door-desc-wrapper">
                    <p>Современное передовое оборудование и большой опыт в производстве стальных дверей позволяет компании создавать продукт отличного качества и надежности</p>
                    <a href="/catalog?type=entry&vendor=Интекрон" class="yellow-but">выбрать дверь</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Блок лидеры продаж и новые поступления -->
<div class="hit-wrapper">
    <div class="container">
        <div class="hit">
            <h3><span>Лидеры</span> продаж</h3>
            <div class="slide-hit" uk-slider="sets: true">
                <ul class="uk-slider-items">
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                </ul>
                <div class="door-nav">
                    <a href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a href="#" uk-slidenav-next uk-slider-item="next"></a>
                    <a class="more-product" href="/catalog?type=entry">больше товаров</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="hit">
            <h3><span>Новые</span> поступления</h3>
            <div class="slide-hit" uk-slider="sets: true">
                <ul class="uk-slider-items">
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                    <li class="item-door">
                        <img src="/public/images/doors/example.jpg" alt="">
                        <p class="name">Название двери</p>
                        <p class="name-vendor">фирма производитель</p>
                        <p class="price">от <span>23 000</span> руб</p>
                        <div class="more-info">
                            <a href="" class="blue-but">где купить</a>
                            <a href="" class="more orange-but">подробнее</a>
                        </div>
                    </li>
                </ul>
                <div class="door-nav">
                    <a href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a href="#" uk-slidenav-next uk-slider-item="next"></a>
                    <a class="more-product" href="/catalog?type=entry">больше товаров</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Блок подвала -->
{% include("bloks/footer.twig.php") %}

{% endblock %}