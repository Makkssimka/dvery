var menu = new Vue({
    el: '#menu',
    data: {
        menuCanvas: ''
    },

    mounted: function () {
        this.menuCanvas = UIkit.offcanvas('#menu-canvas');
    },

    methods: {
        openMenu: function () {
            this.menuCanvas.show();
        }

    }

});

var modal = new Vue({
    el: '#call',
    data: {
        name: '',
        tel: '',
        nameOk: false,
        telOk: false,
        shipped: false
    },

    methods:{
        send: function () {
            var data = new FormData();
            data.append('name', this.name);
            data.append('tel', this.tel);
            axios.post('/send-mail', data).then(response => {
                this.name = this.tel = '';
                this.shipped = true;
            });
        }
    },

    computed:{
        sendOk: function () {
            if(this.telOk && this.nameOk) {
                return true;
            }
        }
    },

    watch:{
        name: function () {
            (this.name.length > 3)?this.nameOk = true:this.nameOk = false;
        },
        tel: function () {
            (this.tel.length > 5)?this.telOk = true:this.telOk = false;
        }
    }
});