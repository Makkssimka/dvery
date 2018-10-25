{% extends "layout.twig.php" %}

{% block content %}

{% include("bloks/menu.twig.php") %}

<div class="breadcrumb" id="top-scroll">
    <div class="container">
        <ul class="uk-breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><span>Гарантийный отдел</span></li>
        </ul>
    </div>
</div>

<div class="guarantee-wrapper" id="guarantee">
    <div class="container">
        <h1><span>Отдел гарантий</span> входных и межкомнатных дверей</h1>
        <div class="guarantee-content">
            <div class="guarantee-form">
                <div class="input-group">
                    <input class="uk-input" v-bind:class="{ 'uk-form-success': nameOk }" type="text" v-model="name" placeholder="введите имя">
                </div>
                <div class="input-group">
                    <input class="uk-input" v-bind:class="{ 'uk-form-success': telOk }" type="text" v-model="telephone" placeholder="введите номер телефона">
                </div>
                <div class="input-group">
                    <textarea class="uk-textarea" v-bind:class="{ 'uk-form-success': messageOk }" rows="5" v-model="message" placeholder="введите сообщение"></textarea>
                </div>
            </div>
            <div class="guarantee-description">
                <p>На данной странице Вы можете обратиться с вопросом по <strong>гарантийным случаям</strong> при эксплуатации установленных фирмой ВИПСЕРВИС <strong>входных и межкомнатных дверей.</strong> Все обращения рассматриваются в течении 3 рабочих дней с момента подачи обращения.</p> <p>Заполните поля и нажмите кнопку отправить. <strong>Все поля обязательны к заполнению</strong></p>
            </div>
        </div>
        <div class="guarantee-form-button">
            <a href="#" class="blue-but-black" v-bind:class="{ disabled: !sendOk }" v-on:click.prevent="send">Отправить</a>
            <a href="#" class="orange-but" v-on:click.prevent="clear">Очистить форму</a>
        </div>
    </div>
</div>

<!-- Блок подвала -->
{% include("bloks/footer.twig.php") %}

{% endblock %}