var app = new Vue({
    el: '#login',
    data: {
        login: '',
        password: '',
        inactiveSubmit: true
    },

    watch: {
        login: function (val) {
            if(val.length && this.password.length) {
                this.inactiveSubmit = false;
            }
            else{
                this.inactiveSubmit = true;
            }

        },
        password: function (val) {
            if (val.length && this.login.length) {
                this.inactiveSubmit = false;
            }
            else {
                this.inactiveSubmit = true;
            }
        }
    }

});
