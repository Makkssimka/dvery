{% extends "admin/layout.twig.php" %}

{% block content %}
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
{% endblock %}