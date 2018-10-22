{% extends "layout.twig.php" %}

{% block content %}

{% include("bloks/menu.twig.php") %}

<div class="breadcrumb" id="top-scroll">
    <div class="container">
        <ul class="uk-breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><span>Адреса магазинов</span></li>
        </ul>
    </div>
</div>

<div class="contact-page-wrapper">
    <div class="container">
        <h1>Магазин <span>межкомнатных и входных дверей</span> Випсервис в Волгограде</h1>
        <div class="contact-list">
            <div class="contact-item">
                <h3><span uk-icon="icon: location; ratio: 1.2"></span> Наш адрес</h3>
                <p>Волгоград, Университетский проспект, д.74</p>
            </div>
            <div class="contact-item">
                <h3><span uk-icon="icon: receiver; ratio: 1.2"></span> Наш телефон</h3>
                <a href="tel:8 (8442) 50-69-69">8 (8442) 50-69-69</a>
            </div>
            <div class="contact-item">
                <h3><span uk-icon="icon: mail; ratio: 1.2"></span> Наш e-mail</h3>
                <a href="mailto:vipservis.su@yandex.ru">vipservis.su@yandex.ru</a>
            </div>
        </div>
    </div>
</div>
<div class="map-wrapper" id="map-scroll">
    <div class="scroll-but">
        <a href="#top-scroll" uk-scroll><span uk-icon="icon: chevron-up; ratio: 1.5"></a>
        <a href="#map-scroll" uk-scroll><span uk-icon="icon: location; ratio: 1.5"></a>
        <a href="#bottom-scroll" uk-scroll><span uk-icon="icon: chevron-down; ratio: 1.5"></a>
    </div>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6491b428d502757bbd3cf9837fda6ea09356a1a164e9ebd051585639696752c8&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>
</div>

<div class="ip-wrapper" id="bottom-scroll">
    <div class="container">
        <h2>ИП <span>«Сюлаев Артур Юрьевич»</span></h2>
        <div class="ip-list">
            <div class="ip-list-item">
                <h3>Свидетельство</h3>
                <p>34№ 004279844 от 25.01.2016г</p>
            </div>
            <div class="ip-list-item">
                <h3>ИНН</h3>
                <p>344813931007</p>
            </div>
            <div class="ip-list-item">
                <h3>ОГРН</h3>
                <p>316344300055497</p>
            </div>
            <div class="ip-list-item">
                <h3>р/сч №</h3>
                <p>40802810611000011910</p>
            </div>
            <div class="ip-list-item">
                <h3>к/с</h3>
                <p>30101810100000000647</p>
            </div>
            <div class="ip-list-item">
                <h3>БИК</h3>
                <p>041806647</p>
            </div>
            <div class="ip-list-item">
                <p>Доп. Офис №8621/0672 Сбербанка России г. Волгоград</p>
            </div>

        </div>
    </div>
</div>

<!-- Блок подвала -->
{% include("bloks/footer.twig.php") %}

{% endblock %}