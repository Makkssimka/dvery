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

</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script src="/public/scripts/site/uikit.min.js"></script>
<script src="/public/scripts/site/uikit-icons.min.js"></script>
{% for script in scripts %}
<script src="/public/scripts/site/{{ script }}"></script>
{% endfor %}
</html>