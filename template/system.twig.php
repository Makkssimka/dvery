{% extends "layout.twig.php" %}

{% block content %}

{% include("bloks/menu.twig.php") %}
<div class="breadcrumb">
    <div class="container">
        <ul class="uk-breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><span>Системы дверей</span></li>
        </ul>
    </div>
</div>


<!-- Блок подвала -->
{% include("bloks/footer.twig.php") %}

{% endblock %}