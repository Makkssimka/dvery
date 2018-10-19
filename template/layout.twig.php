<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ description }}">

    <meta property="og:title" content="{{ title }}"/>
    <meta property="og:description" content="{{ description }}"/>
    <meta property="og:image" content="/public/images/og-image.png">

    <title>{{ title }}</title>
    <link rel="stylesheet" href="/public/style/uikit.min.css">
    <link rel="stylesheet" href="/public/style/fonts.css">
    <link rel="stylesheet" href="/public/style/index.css">
    <link rel="stylesheet" href="/public/style/media.css">
</head>
<body>

{% block content %}{% endblock %}

<div class="modal uk-flex-top" id="call" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close="ratio: 2"></button>
        <h2>Вызвать замерщика</h2>
        <tamplate v-if="!shipped">
            <p>Здесь Вы можите оставить заявку на вызов замерщика. Вам перезвонят в течение 30 минут и уточнят детали</p>
            <form action="">
            <div class="input-group">
                <input class="uk-input" v-bind:class="{ 'uk-form-success': nameOk }" type="text" v-model="name" placeholder="Введите имя">
            </div>
            <div class="input-group">
                <input class="uk-input" v-bind:class="{ 'uk-form-success': telOk }" type="text" v-model="tel" placeholder="Введите номер телефона">
            </div>
            <div class="nav-group">
                <a class="blue-but-black" v-bind:class="{ disabled: !sendOk }" v-on:click.prevent="send" href="#">отправить заявку</a>
            </div>
            </form>
        </tamplate>
        <template v-else>
            <p>Ваша заявка принята, менеджер свяжется с вами в течение 30 минут</p>
        </template>
    </div>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script src="/public/scripts/site/uikit.min.js"></script>
<script src="/public/scripts/site/uikit-icons.min.js"></script>
{% for script in scripts %}
<script src="/public/scripts/site/{{ script }}"></script>
{% endfor %}
</html>