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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="/public/style/admin.css">
</head>
<body>

<div class="content-wrapper" id="content">
    <div class="header">
        <div class="logo-header">
            <img src="/public/images/logo.png" alt="">
        </div>
        <div class="logout-wrapper">
            <a href="/admin/logout"><span class="lnr lnr-exit-up"></span></a>
        </div>
        <div class="menu-collapse">
            <a v-on:click="collapseStatus" href=""><span class="lnr lnr-menu"></span></a>
        </div>
    </div>

    {% include("admin/bloks/menu.twig.php") %}

    <div class="content" v-bind:class="{ collapseContent: isCollapse }">
        {% block content %}{% endblock %}
    </div>
</div>


</body>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.16/js/uikit.min.js"></script>
<script src="/public/scripts/admin/content.js"></script>
{% for script in scripts %}
<script src="/public/scripts/admin/{{ script }}"></script>
{% endfor %}

</html>