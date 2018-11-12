var gallery = new Vue({
    el: '#doors',
    delimiters: ['${', '}'],
    data: {
        id: '',
        name: '',
        preview: '',
        previewName: '',
        newPrice: '',
        oldPrice: '',
        category: 'interior',
        vendor: '',
        colors: [],
        listDoors: [],
        resetDoors: [],
        defaultDesc: [
            {name: 'Размер', value: '600, 700, 800, 900 x 2000 мм'},
            {name: 'Покрытие', value: 'ЭКОшпон'},
            {name: 'Материал', value: 'Сосновый брус'},
            {name: 'Остекление', value: 'Матовое стекло'},
            {name: 'Наличник', value: 'Телескопический'},
            {name: 'Открывание', value: 'Универсальное'}
        ],
        desc: [
            {name: 'Размер', value: '600, 700, 800, 900 x 2000 мм'},
            {name: 'Покрытие', value: 'ЭКОшпон'},
            {name: 'Материал', value: 'Сосновый брус'},
            {name: 'Остекление', value: 'Матовое стекло'},
            {name: 'Наличник', value: 'Телескопический'},
            {name: 'Открывание', value: 'Универсальное'}
        ],
        imagesList: [],
        search: ''
    },
    mounted: function () {
        axios.post('/admin/get-doors').then(response => {
            this.listDoors = response.data;
            this.resetDoors = this.listDoors.slice();
        });
    },

    computed:{
        disable: function () {
            return (this.category == 'interior')?true:false;
        }
    },

    methods:{
        previewSelect: function (e) {
            this.preview = e.target.files[0];
            this.previewName = this.preview.name;
        },
        imageSelect: function(e){
            var data = new FormData();
            data.set('file', e.target.files[0]);
            axios.post('/admin/add-image', data).then(response => {
                this.imagesList.push({
                        name: response.data,
                        desc: ''
                });
            });
        },
        removeImage: function(key, item){
            var data = new FormData();
            data.set('name', item.name);
            axios.post('/admin/remove-image', data).then(response => {
                this.imagesList.splice(key, 1);
            });

        },
        clear: function () {
            this.name = this.preview = this.previewName = this.newPrice = this.oldPrice = this.vendor = '';
            this.category = 'interior';
            this.colors.length = this.imagesList.length = 0;
            this.desc = this.defaultDesc.slice();
        },
        close: function(){
            this.name = this.preview = this.previewName = this.newPrice = this.oldPrice = this.vendor = '';
            this.category = 'interior';
            this.colors.length = this.imagesList.length = 0;
            this.desc = this.defaultDesc.slice();
            UIkit.modal('#modal-add').hide();
        },
        save: function () {
            var data = new FormData();
            data.set('id', this.id);
            data.set('name', this.name);
            data.set('preview', this.preview);
            data.set('new_price', this.newPrice);
            data.set('old_price', this.oldPrice);
            data.set('category', this.category);
            data.set('vendor', this.vendor);
            data.set('color', JSON.stringify(this.colors));
            data.set('desc', JSON.stringify(this.desc));
            data.set('images', JSON.stringify(this.imagesList));
            console.log(name);
            axios.post('/admin/add-door', data).then(response => {
                this.listDoors = response.data;
                this.name = this.preview = this.previewName = this.newPrice = this.oldPrice = this.vendor = '';
                this.category = 'interior';
                this.colors.length = this.imagesList.length = 0;
                this.desc = this.defaultDesc.slice();
                UIkit.modal('#modal-add').hide();
            });
        },
        remove: function (id) {
            var data = new FormData();
            data.set('id', id);
            axios.post('/admin/remove-door', data).then(response =>{
                this.listDoors = response.data;
            });
        },
        edit: function (item) {
            this.name = item.name;
            this.previewName = item.preview;
            this.newPrice = item.newprice;
            this.oldPrice = item.oldprice;
            this.category = item.category;
            this.vendor = item.vendor;
            this.colors = JSON.parse(item.color);
            this.desc = JSON.parse(item.description);
            this.imagesList = JSON.parse(item.images);

            this.id = item.id;
            UIkit.modal('#modal-add').show();
        }
    },

    watch: {
        newPrice: function (value) {
            this.newPrice = value.replace(/\s/g, '').replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g, "$1 ");
        },
        oldPrice: function (value) {
            this.oldPrice = value.replace(' ', '').replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g, "$1 ");
        },
        search: function (value) {
            if(value.length > 3){
                this.listDoors = this.resetDoors.filter(function (elem) {
                    return elem.name.toLowerCase().indexOf(value.toLowerCase()) != -1;
                });
            }
            else{
                this.listDoors = this.resetDoors.slice();
            }
        }
    }
});