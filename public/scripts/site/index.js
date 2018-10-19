var header = new Vue({
    el: '#header',
    data: {
        slideCount: 0,
        slider: '',
        activeSlide: 0,
        menuCanvas: ''
    },
    mounted: function () {
        this.slideCount = document.querySelectorAll('.uk-slideshow-items li');
        this.slider = UIkit.slideshow('#indexSlider');
        this.menuCanvas = UIkit.offcanvas('#menu-canvas');
        var active = this;
        UIkit.util.on('#indexSlider', 'itemshown', function (event, e) {
            active.activeSlide = e.index;
        })
    }
    ,
    methods: {
        slideShow: function (index) {
            this.slider.show(index);
            this.activeSlide = index;
        },
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