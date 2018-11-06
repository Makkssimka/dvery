<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ description }}">
    <title>{{ title }}</title>
    <link rel="icon" href="/public/images/favicon.png" type="image/png">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="/public/style/uikit.min.css">
    <link rel="stylesheet" href="/public/style/fonts.css">
    <link rel="stylesheet" href="/public/style/admin.css">
</head>
<body>

<div class="content-wrapper">
    <div class="header">
        <div class="logo-header">
            <img src="/public/images/logo.png" alt="">
        </div>
        <div class="logout-wrapper">
            <a href="/admin/logout"><span uk-icon="icon: sign-out; ratio: 1.5"></span></a>
        </div>
        <div class="menu-collapse">
            <a href="#"><span uk-icon="icon: menu; ratio: 1.5"></span></a>
        </div>
    </div>

    {% include("admin/bloks/menu.twig.php") %}

    <div class="content">
        {% block content %}{% endblock %}
    </div>
</div>


</body>

<!-- UIkit JS -->
<script src="/public/scripts/vue.min.js"></script>
<script src="/public/scripts/axios.min.js"></script>
<script src="/public/scripts/site/uikit.min.js"></script>
<script src="/public/scripts/site/uikit-icons.min.js"></script>
<script src="/public/scripts/admin/content.js"></script>
{% for script in scripts %}
<script src="/public/scripts/admin/{{ script }}"></script>
{% endfor %}

</html>