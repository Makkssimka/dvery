{% extends "layout.twig.php" %}

{% block content %}

{% include("bloks/menu.twig.php") %}

<div class="breadcrumb" id="top-scroll">
    <div class="container">
        <ul class="uk-breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><span>Аксессуары</span></li>
        </ul>
    </div>
</div>

<div class="aces-wrapper">
    <div class="container">

        <div class="aces-header">
            <div class="aces-header-img">
                <img src="/public/images/aces-one.jpg" alt="">
            </div>
            <div class="aces-header-desc">
                <h1><span>Дверные</span> ручки</h1>
                <p>В нашем каталоге только качественная европейская фурнитура. Подберите идеальную по стилю ручку к вашей двери.</p>
            </div>
        </div>

        <div class="handle-wrapper">
            <div class="handle-list">
                {% for handle in handles %}
                <div class="handle-item">
                    <img src="/public/images/handle/{{ handle.file }}" alt="{{ handle.name }}">
                    <h2>{{ handle.name }}</h2>
                    <div class="handle-color">
                        {% for color_name, color in handle.colors %}
                        <div class="color-handle-item" style="background-color:{{ color }}" uk-tooltip="{{ color_name }}"></div>
                        {% endfor %}
                    </div>
                    <div class="handle-price">
                        от <span>{{ handle.price }}</span> руб.
                    </div>
                    <div class="handle-but">
                        <a href="/contact" class="blue-but">купить</a>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>

        <div class="aces-header">
            <div class="aces-header-desc">
                <h1><span>Дверная</span> фурнитура</h1>
                <p>Мы относимся с большим вниманием к каждой детали ваших дверей.</p>
            </div>
            <div class="aces-header-img">
                <img src="/public/images/aces-two.jpg" alt="">
            </div>
        </div>
        <div class="furniture-wrapper">
            <div class="handle-list">

                <div class="handle-item">
                    <img src="/public/images/handle/petli-1.jpg" alt="">
                    <h2>Карточные петли</h2>
                    <div class="handle-color">
                        <div class="color-handle-item" style="background-color:#f5d78e" uk-tooltip="Матовое золото" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#f7ca65" uk-tooltip="Полированное золото" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#a4a4ac" uk-tooltip="Матовый хром" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#e1e5e8" uk-tooltip="Полированный хром" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#a47a52" uk-tooltip="Матовая бронза" title="" aria-expanded="false"></div>
                    </div>
                    <div class="handle-price">
                        от <span>700</span> руб.
                    </div>
                    <div class="handle-but">
                        <a href="/contact" class="blue-but">купить</a>
                    </div>
                </div>

                <div class="handle-item">
                    <img src="/public/images/handle/petli-2.jpg" alt="">
                    <h2>Скрытые петли</h2>
                    <div class="handle-color">
                        <div class="color-handle-item" style="background-color:#f5d78e" uk-tooltip="Матовое золото" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#f7ca65" uk-tooltip="Полированное золото" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#a4a4ac" uk-tooltip="Матовый хром" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#e1e5e8" uk-tooltip="Полированный хром" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#a47a52" uk-tooltip="Матовая бронза" title="" aria-expanded="false"></div>
                    </div>
                    <div class="handle-price">
                        от <span>1 500</span> руб.
                    </div>
                    <div class="handle-but">
                        <a href="/contact" class="blue-but">купить</a>
                    </div>
                </div>

                <div class="handle-item">
                    <img src="/public/images/handle/zamok-1.jpg" alt="">
                    <h2>Магнитный замок</h2>
                    <div class="handle-color">
                        <div class="color-handle-item" style="background-color:#f5d78e" uk-tooltip="Матовое золото" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#f7ca65" uk-tooltip="Полированное золото" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#a4a4ac" uk-tooltip="Матовый хром" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#e1e5e8" uk-tooltip="Полированный хром" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#a47a52" uk-tooltip="Матовая бронза" title="" aria-expanded="false"></div>
                    </div>
                    <div class="handle-price">
                        от <span>2 500</span> руб.
                    </div>
                    <div class="handle-but">
                        <a href="/contact" class="blue-but">купить</a>
                    </div>
                </div>

                <div class="handle-item">
                    <img src="/public/images/handle/rigel.jpg" alt="">
                    <h2>Ригель для двустворчатых дверей</h2>
                    <div class="handle-color">
                        <div class="color-handle-item" style="background-color:#f5d78e" uk-tooltip="Матовое золото" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#a4a4ac" uk-tooltip="Матовый хром" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#a47a52" uk-tooltip="Матовая бронза" title="" aria-expanded="false"></div>
                    </div>
                    <div class="handle-price">
                        от <span>2 200</span> руб.
                    </div>
                    <div class="handle-but">
                        <a href="/contact" class="blue-but">купить</a>
                    </div>
                </div>

                <div class="handle-item">
                    <img src="/public/images/handle/rutchka-1.jpg" alt="">
                    <h2>Ручка для раздвижных дверей</h2>
                    <div class="handle-color">
                        <div class="color-handle-item" style="background-color:#f5d78e" uk-tooltip="Матовое золото" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#f7ca65" uk-tooltip="Полированное золото" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#a4a4ac" uk-tooltip="Матовый хром" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#e1e5e8" uk-tooltip="Полированный хром" title="" aria-expanded="false"></div>
                        <div class="color-handle-item" style="background-color:#a47a52" uk-tooltip="Матовая бронза" title="" aria-expanded="false"></div>
                    </div>
                    <div class="handle-price">
                        от <span>1 200</span> руб.
                    </div>
                    <div class="handle-but">
                        <a href="/contact" class="blue-but">купить</a>
                    </div>
                </div>

                <div class="handle-item">
                    <img src="/public/images/handle/rutchka-2.jpg" alt="">
                    <h2>Ручка для раздвижных дверей</h2>
                    <div class="handle-color">
                        <div class="color-handle-item" style="background-color:#a4a4ac" uk-tooltip="Матовый хром" title="" aria-expanded="false"></div>
                    </div>
                    <div class="handle-price">
                        от <span>1 100</span> руб.
                    </div>
                    <div class="handle-but">
                        <a href="/contact" class="blue-but">купить</a>
                    </div>
                </div>

                <div class="handle-item">
                    <img src="/public/images/handle/rutchka-3.jpg" alt="">
                    <h2>Ручка для раздвижных дверей</h2>
                    <div class="handle-color">
                        <div class="color-handle-item" style="background-color:#a4a4ac" uk-tooltip="Матовый хром" title="" aria-expanded="false"></div>
                    </div>
                    <div class="handle-price">
                        от <span>1 500</span> руб.
                    </div>
                    <div class="handle-but">
                        <a href="/contact" class="blue-but">купить</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<!-- Блок подвала -->
{% include("bloks/footer.twig.php") %}

{% endblock %}