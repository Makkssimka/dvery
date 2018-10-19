var gallery = new Vue({
    el: '#gallery-door',
    delimiters: ['${', '}'],
    data: {
        gallery: null,
        active: 0,
    },
    mounted: function () {
        //var listPrev = document.querySelectorAll('.image-previews li');
        //listPrev[0].classList.add('active-previews');

        this.gallery = UIkit.slider('.image-show-gallery');
    },

    methods:{
        selectImage: function (index) {
            this.gallery.show(index);
            this.active = index;
        }
    }
});