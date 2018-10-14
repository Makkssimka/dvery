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
        <div class="gallery-door">

        </div>

        <div class="info-door">
            {% if(door.doorType == 'interior') %}
            <h2>Межкомнатная дверь</h2>
            {% else %}
            <h2>Входная дверь</h2>
            {% endif %}
            <h1>{{ door.name }}</h1>
            <div class="description-door">
                <ul>
                    {% for prop, value in door.description %}
                    <li>{{ prop }}: <span>{{ value }}</span></li>
                    {% endfor %}
                </ul>
            </div>
            <div class="price-door-wrapper">
                <div class="new-price-door">
                    {{ door.price }} р.
                </div>
                <div class="old-price-door">
                    {{ door.oldPrice }} р.
                </div>
                <p>
                    Фурнитура и наличники уже входят в базовый комплект
                    <span class="uk-inline">
                        <span class="icon" uk-icon="question"></span>
                        <div uk-dropdown="mode: click; pos: top-center">
                            В состав базового комплекта входят:
                            <ol>
                                <li>Полотно (Полотно 600/700/800/900*2000/2100 мм), </li>
                                <li>Классический короб,</li>
                                <li>Комплект гладких наличников (2*2,5шт) </li>
                                <li>Комплект фурнитуры (карточные петли, магнитный замок с ответной планкой)</li>
                            </ol>
                        </div>
                    </span>

                </p>
            </div>
            <div class="button-price">
                <a class="orange-but" href="">Где купить</a>
            </div>
        </div>
    </div>
</div>

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
                <a class="orange-but" href="#">подробнее о системах</a>
            </div>

        </div>
    </div>
</div>

<!-- Блок подвала -->
{% include("bloks/footer.twig.php") %}

{% endblock %}