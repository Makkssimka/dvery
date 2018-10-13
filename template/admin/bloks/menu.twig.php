<div class="menu-wrapper" v-bind:class="{ collapse: isCollapse }">
    <ul>
        {% for item in menu %}
        <li>
            <a class="{{ item.active?'active-menu' }}" href="{{ item.url }}">
                <span class="lnr {{ item.icon }}"></span>
                <div class="desc-menu">{{ item.name }}</div>
            </a>
        </li>
        {% endfor %}
    </ul>
</div>