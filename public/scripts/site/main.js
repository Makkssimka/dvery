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