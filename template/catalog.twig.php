{% extends "layout.twig.php" %}

{% block content %}

{% include("bloks/menu.twig.php") %}
<div class="breadcrumb">
    <div class="container">
        <ul class="uk-breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><span>Каталог дверей</span></li>
        </ul>
    </div>
</div>

<div class="catalog-list" id="catalog">
    <div class="container">
        <div class="catalog-header">
            <h1>Каталог дверей</h1>
            <div class="wrap-more-select" id="list">
                <a href="#filter" uk-scroll class="blue-but-black">фильтр</a>
                <select class="uk-select" v-model="sortDoorsVal">
                    <option value="" disabled>сортировать</option>
                    <option value="priceAsc">цена по возростанию</option>
                    <option value="priceDesc">цена по убыванию</option>
                </select>
            </div>
        </div>

        <template v-if="resultDoors.length">
            <transition-group name="list" class="catalog-content" tag="div">
                <div v-for="(item, index) in resultDoors" v-bind:key="item.id" class="cat-item-door">
                    <img v-bind:src="'/public/images/doors/previews/' + item.preview" alt="">
                    <h4 class="name-door">${ item.name }</h4>
                    <p class="vendor-door">${ item.vendor }</p>
                    <p class="color-door">примеров расцветки: ${ JSON.parse(item.images).length }</p>
                    <p class="price-door">от <span>${ item.newprice }</span> руб</p>
                    <div class="more-info">
                        <a href="/contact" target="_blank" class="blue-but">купить</a>
                        <a v-bind:href="'/door?id=' + item.id" target="_blank" class="more orange-but">подробнее</a>
                    </div>
                </div>
            </transition-group>

            <div class="catalog-pagination">
                <ul>
                    <li v-for="item in paginationCount"><a v-bind:class="{ 'uk-disabled': paginationPosition == (item -1) }" v-on:click.prevent="pagination(item-1)" href="#">${ item }</a></li>
                </ul>
            </div>
        </template>
        <temlate v-else>
            <div class="catalog-content">
                <p class="loading" v-bind:class="{ 'l-hide': noSearch}">идет загрузка</p>
                <p class="no-search" v-bind:class="{ 'l-show': noSearch}">ничего не найдено</p>
            </div>
        </temlate>


        <div class="category-filter" id="filter">
            <h4>Фильтр</h4>
            <div class="filter-list">
                <div class="filter-wrapper">
                    <p>Тип дверей</p>
                    <div class="group-filter">
                        <label for="interior">межкомнатные двери</label>
                        <input type="checkbox" value="interior" id="interior" v-model="doorType">
                        <span class="check-custom"></span>
                    </div>
                    <div class="group-filter">
                        <label for="entry">входные двери</label>
                        <input type="checkbox" value="entry" id="entry" v-model="doorType">
                        <span class="check-custom"></span>
                    </div>
                </div>
                <div class="filter-wrapper">
                    <p>Производители</p>
                    <div class="group-filter">
                        <input type="checkbox" value="Геона" id="geona" v-model="vendor" v-bind:disabled="checkInt">
                        <label for="geona">геона</label>
                        <span class="check-custom"></span>
                    </div>
                    <div class="group-filter">
                        <input type="checkbox" value="Варадор" id="varador" v-model="vendor" v-bind:disabled="checkInt">
                        <label for="varador">варадор</label>
                        <span class="check-custom"></span>
                    </div>
                    <div class="group-filter">
                        <input type="checkbox" value="Интекрон" id="intecron" v-model="vendor" v-bind:disabled="checkEnt">
                        <label for="intecron">интекрон</label>
                        <span class="check-custom"></span>
                    </div>
                </div>
                <div class="filter-wrapper">
                    <p>Цветовой тип</p>
                    <div class="group-filter">
                        <label for="withe">светлые двери</label>
                        <input type="checkbox" value="withe" id="withe" v-model="colorType">
                        <span class="check-custom"></span>
                    </div>
                    <div class="group-filter">
                        <label for="black">темные двери</label>
                        <input type="checkbox" value="black" id="black" v-model="colorType">
                        <span class="check-custom"></span>
                    </div>
                </div>
                <div class="filter-wrapper">
                    <p>Цена</p>
                    <div class="group-filter">
                        от <input type="text" size="5" v-model="priceFrom">
                        до <input type="text" size="5" v-model="priceTo">
                    </div>
                </div>

            </div>
            <div class="filter-button">
                <a href="#list" v-on:click="filter" uk-scroll class="submit blue-but">применить</a>
                <a href="#list" v-on:click="clear" uk-scroll class="reset red-but">очистить</a>
            </div>
        </div>

    </div>
</div>

<!-- Блок подвала -->
{% include("bloks/footer.twig.php") %}

{% endblock %}