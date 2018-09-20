{% extends "admin/layout.twig.php" %}

{% block content %}
<div class="content-wrapper">
    <div class="menu-wrapper">
        <div class="logo-menu">
            <img src="/public/images/logo.png" alt="">
        </div>
    </div>
    <div class="content">
        <div class="header-content">
            <h4>{{ title }}</h4>
            <form method="post" action="">
                <button type="submit"><span uk-icon="sign-out"></span></button>
            </form>
        </div>
    </div>
</div>
{% endblock %}