var gallery = new Vue({
    el: '#access',
    delimiters: ['${', '}'],
    data: {
        name: '',
        file: '',
        price: '',
        color: [],
        fileName: '',
        id: '',
        listAccess: []
    },
    mounted: function () {
        axios.post('/admin/get-accessories').then(response => {
            this.listAccess = response.data;
        });
    },

    methods:{
        fileSelect: function (e) {
            this.file = e.target.files[0];
            this.fileName = this.file.name;
        },
        clear: function () {
            this.name = this.file = this.price = this.fileName = '';
            this.color.length = 0;
        },
        close: function(){
            this.name = this.file = this.price = this.fileName = this.id = '';
            this.color.length = 0;
        },
        save: function () {
            var data = new FormData();
            data.set('name', this.name);
            data.set('price', this.price);
            data.set('color', this.color);
            data.set('file', this.file);
            data.set('id', this.id);
            axios.post('/admin/add-accessories', data).then(response => {
                this.listAccess = response.data;
                UIkit.modal('#modal-add').hide();
                this.name = this.file = this.price = this.fileName = this.id = '';
                this.color.length = 0;
            });
        },
        remove: function (id) {
            var data = new FormData();
            data.set('id', id);
            axios.post('/admin/remove-accessories', data).then(response => {
                this.listAccess = response.data;
            });
        },
        edit: function (item) {
            this.name= item.name;
            this.price = item.price;
            this.color = item.color.split(',');
            this.fileName = item.file;
            this.id = item.id;
            UIkit.modal('#modal-add').show();
        }
    }
});