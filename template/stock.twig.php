{% extends "layout.twig.php" %}

{% block content %}

{% include("bloks/menu.twig.php") %}

<div class="breadcrumb" id="top-scroll">
    <div class="container">
        <ul class="uk-breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><span>Акции</span></li>
        </ul>
    </div>
</div>

<div class="stock-wrapper">
    <div class="container">
        <h1><span>Акции</span> на входные и межкомнатные двери</h1>
        <div class="stock-list">
            <a href="#" uk-toggle="target: #stock-1" class="stock-item">
                <img src="/public/images/stock_1.jpg" alt="Скидки до 20% в честь открытия нового магазина входных и межкомнатных дверей">
                <p>Скидки до 20% в честь открытия нового магазина входных и межкомнатных дверей</p>
                <div class="counter">
                     <div uk-countdown="date: {{ time[3] }}">
                        <span class="counter-number uk-countdown-days"></span>
                        <span class="uk-countdown-separator">:</span>
                        <span class="counter-number uk-countdown-hours"></span>
                        <span class="uk-countdown-separator">:</span>
                        <span class="counter-number uk-countdown-minutes"></span>
                        <span class="uk-countdown-separator">:</span>
                        <span class="counter-number uk-countdown-seconds"></span>
                     </div>
                    <p>до конца акции</p>
                </div>
                <div class="stock-item-nav">
                    <span class="orange-but">подробнее</span>
                </div>
            </a>

            <div id="stock-1" uk-modal>
                <div class="uk-modal-dialog uk-margin-auto-vertical">
                    <button class="uk-modal-close-default" type="button" uk-close="ratio: 2"></button>
                    <img src="/public/images/stock_1.jpg" alt="Скидки до 20% в честь открытия нового магазина входных и межкомнатных дверей">
                    <div class="description-stock">
                        <p>Lorem ipsum dolor sit <strong>amet, consectetur adipisicing</strong> elit. Facere, obcaecati.</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur.</li>
                            <li>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit.</strong> Cumque eveniet optio voluptatum.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Blanditiis debitis dolorem doloremque natus</strong> obcaecati tempora.</p>
                    </div>
                </div>
            </div>

            <a href="#" uk-toggle="target: #stock-2" class="stock-item">
                <img src="/public/images/stock_2.jpg" alt="">
                <p>Больше возможностей с накопительной скидочной картой "уютный дом"</p>
                <div class="counter">
                    <div uk-countdown="date: {{ time[1] }}">
                        <span class="counter-number uk-countdown-days"></span>
                        <span class="uk-countdown-separator">:</span>
                        <span class="counter-number uk-countdown-hours"></span>
                        <span class="uk-countdown-separator">:</span>
                        <span class="counter-number uk-countdown-minutes"></span>
                        <span class="uk-countdown-separator">:</span>
                        <span class="counter-number uk-countdown-seconds"></span>
                    </div>
                    <p>до конца акции</p>
                </div>
                <div class="stock-item-nav">
                    <span class="orange-but">подробнее</span>
                </div>
            </a>

            <div id="stock-2" uk-modal>
                <div class="uk-modal-dialog uk-margin-auto-vertical">
                    <button class="uk-modal-close-default" type="button" uk-close="ratio: 2"></button>
                    <img src="/public/images/stock_2.jpg" alt="Скидки до 20% в честь открытия нового магазина входных и межкомнатных дверей">
                    <div class="description-stock">
                        <p>Lorem ipsum dolor sit <strong>amet, consectetur adipisicing</strong> elit. Facere, obcaecati.</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur.</li>
                            <li>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit.</strong> Cumque eveniet optio voluptatum.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Blanditiis debitis dolorem doloremque natus</strong> obcaecati tempora.</p>
                    </div>
                </div>
            </div>

            <a href="#" uk-toggle="target: #stock-3" class="stock-item">
                <img src="/public/images/stock_3.jpg" alt="">
                <p>Всем новоселам у нас есть скидки до 5 000 рублей</p>
                <div class="counter">
                    <div uk-countdown="date: {{ time[0] }}">
                        <span class="counter-number uk-countdown-days"></span>
                        <span class="uk-countdown-separator">:</span>
                        <span class="counter-number uk-countdown-hours"></span>
                        <span class="uk-countdown-separator">:</span>
                        <span class="counter-number uk-countdown-minutes"></span>
                        <span class="uk-countdown-separator">:</span>
                        <span class="counter-number uk-countdown-seconds"></span>
                    </div>
                    <p>до конца акции</p>
                </div>
                <div class="stock-item-nav">
                    <span class="orange-but">подробнее</span>
                </div>
            </a>

            <div id="stock-3" uk-modal>
                <div class="uk-modal-dialog uk-margin-auto-vertical">
                    <button class="uk-modal-close-default" type="button" uk-close="ratio: 2"></button>
                    <img src="/public/images/stock_3.jpg" alt="Скидки до 20% в честь открытия нового магазина входных и межкомнатных дверей">
                    <div class="description-stock">
                        <p>Lorem ipsum dolor sit <strong>amet, consectetur adipisicing</strong> elit. Facere, obcaecati.</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur.</li>
                            <li>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit.</strong> Cumque eveniet optio voluptatum.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Blanditiis debitis dolorem doloremque natus</strong> obcaecati tempora.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Блок подвала -->
{% include("bloks/footer.twig.php") %}

{% endblock %}