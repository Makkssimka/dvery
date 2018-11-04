<div class="menu-wrapper" v-bind:class="{ collapse: isCollapse }">
    <ul>
        {% for item in menu %}
        <li>
            <a class="{{ item.active?'active-menu' }}" href="{{ item.url }}">
                <span uk-icon="icon: {{ item.icon }}; ratio: 2.5"></span>
                <div class="desc-menu">{{ item.name }}</div>
            </a>
        </li>
        {% endfor %}
    </ul>
</div>