{% extends "admin/layout.twig.php" %}

{% block content %}
<h3>{{ title }}</h3>
<div class="content-block">
    <form action="" method="post">
        <div class="uk-margin">
            <label for="siteName" class="uk-form-label">Название сайта</label>
            <input type="text" id="siteName" class="uk-input" name="siteName" value="{{ settings.title }}">
        </div>
        <div class="uk-margin">
            <label for="siteDescription" class="uk-form-label">Описание сайта</label>
            <textarea id="siteDescription" class="uk-textarea" name="siteDescription" rows="4">{{ settings.desc }}</textarea>
        </div>
        <div class="uk-margin">
            <button class="uk-button uk-button-primary" type="submit">Сохранить</button>
        </div>
    </form>
</div>
{% endblock %}