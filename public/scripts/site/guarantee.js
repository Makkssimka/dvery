var guarantee = new Vue({
    el: '#guarantee',
    data: {
        name: '',
        telephone: '',
        message: '',
        nameOk: false,
        telOk: false,
        messageOk: false,
        shipped: false
    },

    methods:{
        send: function () {
            if(this.sendOk) {
                var data = new FormData();
                data.append('name', this.name);
                data.append('telephone', this.telephone);
                data.append('message', this.message);
                axios.post('/send-guarantee', data).then(response => {
                    this.name = this.telephone = this.message = '';
                    this.shipped = true;
                });
            }
        },
        clear: function () {
            this.name = this.telephone = this.message = '';
        }
    },

    computed:{
        sendOk: function () {
            if(this.telOk && this.nameOk && this.messageOk) {
                return true;
            }
        }
    },

    watch:{
        name: function () {
            (this.name.length > 3)?this.nameOk = true:this.nameOk = false;
        },
        telephone: function () {
            (this.telephone.length > 5)?this.telOk = true:this.telOk = false;
        },
        message: function () {
            (this.message.length > 20)?this.messageOk = true:this.messageOk = false;
        }
    }
});