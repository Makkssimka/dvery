var app = new Vue({
    el: '#content',
    data: {
        isCollapse: false
    },

    methods: {
        collapseStatus: function (e) {
            e.preventDefault();
            this.isCollapse = this.isCollapse?false:true;
        }
    }

});
