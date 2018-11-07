var gallery = new Vue({
    el: '#gallery-door',
    delimiters: ['${', '}'],
    data: {
        gallery: null,
        slider: null,
        active: 0,
    },
    mounted: function () {
        this.gallery = UIkit.slider('.image-show-gallery');
        UIkit.lightbox('.uk-slider-items',{
            delayControls: 1000
        });
    },

    methods:{
        selectImage: function (index) {
            this.gallery.show(index);
            this.active = index;
        }
    }
});