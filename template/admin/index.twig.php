{% extends "admin/layout.twig.php" %}

{% block content %}
<div id="access">
    <div class="button-panel">
        <a href="#modal-add" class="uk-button uk-button-primary" uk-toggle><span uk-icon="icon: file-edit; ratio: 0.8;"></span> добавить</a>
    </div>
    <div class="table-wrapper">
        <table class="uk-table uk-table-striped uk-table-small">
            <thead>
            <tr>
                <th>Id</th>
                <th>Название</th>
                <th>Изображение</th>
                <th>Цвета</th>
                <th>Цена</th>
                <th>Опции</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in listAccess">
                <td>${ item.id }</td>
                <td>${ item.name }</td>
                <td>${ item.file }</td>
                <td class="colors-item ">
                    <span v-for="color, name in item.colors" v-bind:style="{ backgroundColor: color}" v-bind:uk-tooltip="name"></span>
                </td>
                <td>${ item.price }</td>
                <td>
                    <a class="option-but-edit" href="#" uk-tooltip="Редактировать" v-on:click.prevent="edit(item)"><span uk-icon="icon: file-edit; ratio: 1;"></a>
                    <a class="option-but-remove" href="#" uk-tooltip="Удалить" v-on:click.prevent="remove(item.id)"><span uk-icon="icon: trash; ratio: 1;"></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="modal-add" class="uk-modal-full modal-add" uk-modal>
        <div class="uk-modal-body">
            <a class="uk-modal-close-full" uk-close="ratio: 2" href="#" v-on:click="close"></a>
            <h3>Добавление/редактирование аксессуара</h3>

            <div class="param-wrapper">
                <div class="list-param">
                    <div class="param-item">
                        <label for="name">Название аксессуара</label>
                        <input type="text" id="name" class="uk-input" v-model="name">
                    </div>
                    <div class="param-item">
                        <label for="file">Фото аксессуара</label>
                        <div uk-form-custom>
                            <input type="file" id="file" v-on:change="fileSelect">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="файл" disabled v-model="fileName">
                            <button class="uk-button uk-button-default" type="button" >выбрать</button>
                        </div>
                    </div>
                    <div class="param-item">
                        <label for="price">Цена</label>
                        <input type="text" id="price" class="uk-input" v-model="price">
                    </div>
                </div>

                <div class="list-param">
                    <div class="param-item">
                        <p>Выберите цвет</p>
                        <label><input style="background-color:#f5d78e" type="checkbox" class="uk-checkbox" value="mz" v-model="color">Матовое золото</label>
                        <label><input style="background-color:#f7ca65" type="checkbox" class="uk-checkbox" value="pz" v-model="color">Полированное золото</label>
                        <label><input style="background-color:#a4a4ac" type="checkbox" class="uk-checkbox" value="mh" v-model="color">Матовый хром</label>
                        <label><input style="background-color:#e1e5e8" type="checkbox" class="uk-checkbox" value="ph" v-model="color">Полированный хром</label>
                        <label><input style="background-color:#a47a52" type="checkbox" class="uk-checkbox" value="mb" v-model="color">Матовая бронза</label>
                        <label><input style="background-color:#e2e2e2" type="checkbox" class="uk-checkbox" value="be" v-model="color">Белая эмаль</label>
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