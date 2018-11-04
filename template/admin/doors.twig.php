{% extends "admin/layout.twig.php" %}

{% block content %}
<div id="doors">
    <div class="button-panel">
        <a href="#modal-add" class="uk-button uk-button-primary" uk-toggle><span uk-icon="icon: file-edit; ratio: 0.8;"></span> добавить</a>
    </div>
    <div class="table-wrapper">
        <table class="uk-table uk-table-striped uk-table-small">
            <thead>
            <tr>
                <th>Id</th>
                <th>Название</th>
                <th>Категория</th>
                <th>Производитель</th>
                <th>Новая цена</th>
                <th>Старая цена</th>
                <th>Опции</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in listDoors">
                <td>${ item.id }</td>
                <td>${ item.name }</td>
                <td v-if="item.category == 'interior'">
                    Межкомнатная
                </td>
                <td v-else>
                    Входная
                </td>
                <td>${ item.vendor }</td>
                <td>${ item.newprice }</td>
                <td>${ item.oldprice }</td>
                <td>
                    <a class="option-but-edit" href="#" uk-tooltip="Редактировать" v-on:click.prevent="edit(item)"><span uk-icon="icon: file-edit; ratio: 1;"></a>
                    <a class="option-but-remove" href="#" uk-tooltip="Удалить" v-on:click.prevent="remove(item.id)"><span uk-icon="icon: trash; ratio: 1;"></a>
                    <a class="option-but-info" href="#" uk-tooltip="Подробнее" v-on:click.prevent="edit(item)"><span uk-icon="icon: question; ratio: 1;"></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="modal-add" class="uk-modal-full modal-add" uk-modal>
        <div class="uk-modal-body">
            <a class="uk-modal-close-full" uk-close="ratio: 2" href="#" v-on:click="close"></a>
            <h3>Добавление/редактирование двери</h3>

            <div class="param-wrapper">
                <div class="list-param">
                    <div class="param-item">
                        <label for="name">Название двери</label>
                        <input type="text" id="name" class="uk-input" v-model="name">
                    </div>
                    <div class="param-item">
                        <label for="preview">Превью двери</label>
                        <div uk-form-custom>
                            <input type="file" id="preview" v-on:change="previewSelect">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="файл" disabled v-model="previewName">
                            <button class="uk-button uk-button-primary" type="button" >выбрать</button>
                        </div>
                    </div>
                    <div class="param-item">
                        <label for="new-price">Новая цена</label>
                        <input type="text" id="new-price" class="uk-input" v-model="newPrice">
                    </div>
                    <div class="param-item">
                        <label for="old-price">Старая цена</label>
                        <input type="text" id="old-price" class="uk-input" v-model="oldPrice">
                    </div>
                    <div class="param-item list-check">
                        <p>Выберите категорию двери</p>
                        <label><input type="radio" class="uk-radio" name="category" value="interior" v-model="category" checked>Межкомнатная</label>
                        <label><input type="radio" class="uk-radio" name="category" value="entry" v-model="category">Входная</label>
                    </div>
                    <div class="param-item list-check">
                        <p>Выберите производителя</p>
                        <label><input type="radio" class="uk-radio" name=vendor value="Геона" v-model="vendor" v-bind:disabled="!disable">Геона</label>
                        <label><input type="radio" class="uk-radio" name=vendor value="Варадор" v-model="vendor" v-bind:disabled="!disable">Варадор</label>
                        <label><input type="radio" class="uk-radio" name=vendor value="Интекрон" v-model="vendor" v-bind:disabled="disable">Интекрон</label>
                    </div>
                    <div class="param-item list-check">
                        <p>Выберите цветовой тип</p>
                        <label><input type="checkbox" class="uk-checkbox" value="withe" v-model="colors">Светлая</label>
                        <label><input type="checkbox" class="uk-checkbox" value="black" v-model="colors">Темная</label>
                    </div>
                </div>

                <div class="list-param">
                    <div class="param-item">
                        <p>Описание двери</p>
                        <div class="desc-row" v-for="item in desc">
                            <label>${ item.name }</label>
                            <input type="text" v-model="item.value" class="uk-input">
                        </div>
                    </div>
                </div>

                <div class="list-param">
                    <p>Варианты исполнения</p>
                    <div class="desc-row" v-for="item, key in imagesList">
                        <a href="" uk-icon="icon: close" uk-tooltip="удалить" v-on:click.prevent="removeImage(key, item)"></a>
                        <label>${ item.name }</label>
                        <input type="text" v-model="item.desc" class="uk-input" placeholder="название варианта">
                    </div>
                    <div class="add-wrapper">
                        <p>Добавить изображение</p>
                        <div uk-form-custom>
                            <input type="file" v-on:change="imageSelect">
                            <button class="uk-button uk-button-primary" type="button">Выбрать</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="but-param-wrapper">
                <a href="#" class="uk-button uk-button-primary" v-on:click.prevent="save"><span uk-icon="icon: file-edit; ratio: 0.8;"></span> сохранить</a>
                <a href="#" class="uk-button uk-button-danger" v-on:click.prevent="clear"><span uk-icon="icon: trash; ratio: 0.8;"></span> очистить</a>
            </div>

        </div>
    </div>
</div>

{% endblock %}