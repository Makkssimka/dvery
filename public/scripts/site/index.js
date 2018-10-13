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