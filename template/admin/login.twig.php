{% extends "admin/layout.twig.php" %}

{% block content %}
<div class="login-wrapper" id="login">
    <div class="card uk-card uk-card-default">
        <img src="/public/images/logo.png" alt="">
        <h3>Авторизация</h3>
        <form action="">
            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="логин">
            </div>
            <div class="uk-margin">
                <input class="uk-input" type="password" placeholder="пароль">
            </div>
            <button type="submit" class="uk-button uk-button-primary" disabled>Войти</button>
        </form>
    </div>
</div>
{% endblock %}