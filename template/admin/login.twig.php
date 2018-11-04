<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ description }}">
    <title>{{ title }}</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="/public/style/uikit.min.css">
    <link rel="stylesheet" href="/public/style/fonts.css">
    <link rel="stylesheet" href="/public/style/admin.css">
</head>
<body>

{% if error == true %}
<div class="uk-alert-danger alert" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    Проверьте введенные данные
</div>
{% endif %}
<div class="login-wrapper" id="login">
    <div class="card uk-card uk-card-default">
        <img src="/public/images/logo.png" alt="">
        <form method="post" action="">
            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="логин" name="login" v-model.trim="login">
            </div>
            <div class="uk-margin">
                <input class="uk-input" type="password" placeholder="пароль" name="password" v-model.trim="password">
            </div>
            <button type="submit" class="uk-button uk-button-primary" v-bind:disabled="inactiveSubmit">Войти</button>
        </form>
    </div>
</div>

</body>
<script src="/public/scripts/site/uikit.min.js"></script>
</html>
