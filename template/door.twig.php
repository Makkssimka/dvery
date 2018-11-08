{% extends "layout.twig.php" %}

{% block content %}

{% include("bloks/menu.twig.php") %}

<div class="breadcrumb">
    <div class="container">
        <ul class="uk-breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/catalog">Каталог</a></li>
            <li><span>{{ door.name }}</span></li>
        </ul>
    </div>
</div>

<div class="door-page-wrapper">
    <div class="container">
        <div class="gallery-door" id="gallery-door">
            <div class="image-show-gallery" uk-slider>
                <ul class="uk-slider-items" uk-lightbox>
                    {% for item in images %}
                    <li>
                        <a href="/public/images/doors/images/{{ item.name }}" data-caption="{{ item.desc }}" ><img src="/public/images/doors/images/{{ item.name }}" alt=""></a>
                        <p class="name-door">{{ item.desc }}</p>
                    </li>
                    {% endfor %}
                </ul>
                <a class="uk-position-center-left uk-slidenav-large" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-slidenav-large" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
            <div class="image-previews" uk-slider="sets: true">
                <ul class="uk-slider-items">
                    {% for key, item in images %}
                    <li v-on:click="selectImage({{ key }})" v-bind:class="{ 'active-previews' : active == {{ key }} }">
                        <img src="/public/images/doors/images/{{ item.name }}" alt="">
                    </li>
                    {% endfor %}
                </ul>
                <a class="uk-position-center-left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
        </div>

        <div class="info-door">
            {% if(door.category == 'interior') %}
            <h2>Межкомнатная дверь</h2>
            {% else %}
            <h2>Входная дверь</h2>
            {% endif %}
            <h1>{{ door.name }}</h1>
            <div class="description-door">
                <ul>
                    {% for item in desc %}
                    <li>{{ item.name }}: <span>{{ item.value }}</span></li>
                    {% endfor %}
                    <li class="red-item">Более <span>500 различных вариантов</span> расцветки на ваш выбор</li>
                </ul>
            </div>
            <div class="price-door-wrapper">
                <div class="new-price-door">
                    {{ door.newprice }} р.
                </div>
                <div class="old-price-door">
                    {{ door.oldprice }} р.
                </div>
                <p>Цена указана за дверное полотно</p>
            </div>
            <div class="button-price">
                <a class="orange-but" href="/contact">Где купить</a>
            </div>
        </div>
    </div>
</div>

<!-- Блок похожие товары -->
<div class="similar-door">
    <div class="container">
        <h4>Похожие двери</h4>
        <h5>Двери которые могут быть вам также интересны</h5>
        <div uk-slider class="similar-list">
            <ul class="uk-slider-items">
                <li>
                    <img src="/public/images/doors/viras-dub-2014.jpg" alt="">
                    <p class="name">Вираж</p>
                    <p class="price">от <span>24 000</span> руб.</p>
                    <a class="blue-but-black" href="#">Смотреть</a>
                </li>
                <li>
                    <img src="/public/images/doors/viras-dub-2014.jpg" alt="">
                    <p class="name">Вираж</p>
                    <p class="price">от <span>24 000</span> руб.</p>
                    <a class="blue-but-black" href="#">Смотреть</a>
                </li>
                <li>
                    <img src="/public/images/doors/viras-dub-2014.jpg" alt="">
                    <p class="name">Вираж</p>
                    <p class="price">от <span>24 000</span> руб.</p>
                    <a class="blue-but-black" href="#">Смотреть</a>
                </li>
                <li>
                    <img src="/public/images/doors/viras-dub-2014.jpg" alt="">
                    <p class="name">Вираж</p>
                    <p class="price">от <span>24 000</span> руб.</p>
                    <a class="blue-but-black" href="#">Смотреть</a>
                </li>
                <li>
                    <img src="/public/images/doors/viras-dub-2014.jpg" alt="">
                    <p class="name">Вираж</p>
                    <p class="price">от <span>24 000</span> руб.</p>
                    <a class="blue-but-black" href="#">Смотреть</a>
                </li>
                <li>
                    <img src="/public/images/doors/viras-dub-2014.jpg" alt="">
                    <p class="name">Вираж</p>
                    <p class="price">от <span>24 000</span> руб.</p>
                    <a class="blue-but-black" href="#">Смотреть</a>
                </li>
                <li>
                    <img src="/public/images/doors/viras-dub-2014.jpg" alt="">
                    <p class="name">Вираж</p>
                    <p class="price">от <span>24 000</span> руб.</p>
                    <a class="blue-but-black" href="#">Смотреть</a>
                </li>
                <li>
                    <img src="/public/images/doors/viras-dub-2014.jpg" alt="">
                    <p class="name">Вираж</p>
                    <p class="price">от <span>24 000</span> руб.</p>
                    <a class="blue-but-black" href="#">Смотреть</a>
                </li>

            </ul>
            <div class="similar-nav">
                <div class="arrows">
                    <a href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
                <a class="orange-but" href="/catalog">перейти в каталог</a>
            </div>
        </div>
    </div>
</div>

<!-- Блок аксессуары -->
<div class="door-accessory">
    <div class="container">
        <div class="info-accessory">
            <h3>Аксессуары<br />для дверей</h3>
            <p>В нашем каталоге только качественная европейская фурнитура. Подберите идеальные по стилю аксессуары к вашей двери.</p>
            <a class="yellow-but" href="/accessories">выбрать акссесуары</a>
        </div>
    </div>
</div>


    <!-- Блок системы -->
<div class="catalog-system-wrapper">
    <div class="container">
        <h4>системы</h4>
        <p>Ваша дверь может быть функциональной и уникальной. Доступные системы в коллекции {{ door.name }}:</p>
        <div uk-slider class="catalog-slider-system">
            <ul class="uk-slider-items">
                <li><img src="/public/images/system-1.svg" alt="Распашная дверь, открывание на себя"><p>Распашная дверь, открывание на себя</p></li>
                <li><img src="/public/images/system-2.svg" alt="Раздвижная дверь вдоль стены в пенал"><p>Раздвижная дверь вдоль стены в пенал</p></li>
                <li><img src="/public/images/system-3.svg" alt="Дверь-книжка"><p>Дверь-книжка</p></li>
                <li><img src="/public/images/system-4.svg" alt="Обрамление проема"><p>Обрамление проема</p></li>
                <li><img src="/public/images/system-5.svg" alt="Раздвижная перегородка вдоль стены"><p>Раздвижная перегородка вдоль стены</p></li>
                <li><img src="/public/images/system-6.svg" alt="Фрамуга верхняя"><p>Фрамуга верхняя</p></li>
                <li><img src="/public/images/system-7.svg" alt="Фрамуга боковая"><p>Фрамуга боковая</p></li>
                <li><img src="/public/images/system-8.svg" alt="Раздвижная дверь вдоль стены"><p>Раздвижная дверь вдоль стены</p></li>
            </ul>
            <div class="catalog-slider-nav">
                <div class="arrows">
                    <a href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
                <a class="orange-but" href="/system-door">подробнее о системах</a>
            </div>

        </div>
    </div>
</div>


<!-- Блок подвала -->
{% include("bloks/footer.twig.php") %}

{% endblock %}