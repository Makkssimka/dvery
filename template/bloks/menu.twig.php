<div class="menu-more-wrapper" id="menu">
    <div class="container">
        <div class="menu-more-logo">
            <img src="/public/images/logo.svg" alt="">
            <p>висервис</p>
        </div>
        <div class="menu-more-list">
            <ul>
                {% for item in menu %}
                <li><a class="{{ item.active?'active' }}" href="{{ item.url }}">{{ item.name }}</a></li>
                {% endfor %}
                <li><a href="#" uk-toggle="target: #call">заказать замер</a></li>
                <li class="menu-but">
                    <svg v-on:click="openMenu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 20"><g transform="translate(-1002 -989)"><rect class="a" width="30" height="3" transform="translate(1002 989)"/><rect class="a" width="30" height="3" transform="translate(1002 997.421)"/><rect class="a" width="30" height="3" transform="translate(1002 1005.842)"/></g></svg>
                </li>
            </ul>
        </div>
    </div>


</div>

<div class="uk-offcanvas-content">
    <div id="menu-canvas" uk-offcanvas="flip: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close="ratio: 1.5"></button>

            <nav class="menu-list">
                <ul class="uk-nav">
                    <li class="uk-nav-header">Двери</li>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/stock">Акции</a></li>
                    <li><a href="/catalog?type=interior">Межкомнатные</a></li>
                    <li><a href="/catalog?type=entry">Входные</a></li>
                    <li><a href="/accessories">Аксессуары</a></li>
                    <li><a href="/system-door">Системы</a></li>
                    <li><a href="/guarantee">Гарантийный отдел</a></li>
                </ul>
                <ul class="uk-nav">
                    <li class="uk-nav-header">Наши услуги</li>
                    <li><a href="http://vipservis.su/">Натяжные потолки</a></li>
                    <li><a href="http://split.vipservis.su/">Сплит-системы</a></li>
                    <li><a href="http://okno.vipservis.su/">Окна</a></li>
                    <li><a href="#" uk-toggle="target: #call">Вызвать замерщика</a></li>
                </ul>
                <ul class="uk-nav">
                    <li class="uk-nav-header">Контакты</li>
                    <li><a href="/contact">Где купить</a></li>
                    <li><a href="tel:8 (8442) 50-69-69">8 (8442) 50-69-69</a></li>
                    <li><a href="/contact">Университетский пр-т, д.74</a></li>
                </ul>
            </nav>

        </div>
    </div>
</div>