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

<!-- Блок подвала -->
{% include("bloks/footer.twig.php") %}

{% endblock %}