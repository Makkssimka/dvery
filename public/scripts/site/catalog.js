var catalog = new Vue({
    el: '#catalog',
    delimiters: ['${', '}'],
    data: {
        doors: [],
        resultDoors: [],
        paginationNum: 10,
        paginationCount: null,
        paginationPosition: 0,
        sortDoorsVal: '',
        resetDoors: [],
        vendor: [],
        doorType: [],
        colorType: [],
        noSearch: false,
        priceFrom: null,
        priceTo: null,
        filterCanvas: null
    },
    
    mounted: function () {
        axios.post('/get-doors-site').then(response => {
            this.doors = response.data;
            this.resetDoors = response.data.slice();
            this.paginationCount = Math.ceil(this.doors.length/this.paginationNum);
            this.resultDoors = this.doors.slice(this.paginationPosition,  this.paginationPosition + this.paginationNum);

            var urlGet = getRequest();
            if(urlGet.type) this.doorType.push(urlGet.type);
            if(urlGet.vendor) this.vendor.push(decodeURI(urlGet.vendor));

            this.filter();
        });
    },

    methods: {
        pagination: function (pos) {
            this.paginationPosition = pos;
            this.resultDoors = this.doors.slice(pos*this.paginationNum,  pos*this.paginationNum + this.paginationNum);
        },
        //Очистить форму
        clear: function () {
            this.doorType = this.colorType = this.vendor = [];
            this.priceFrom = this.priceTo = '';
            this.doors = this.resetDoors.slice();
            this.sortDoorsVal = '';
            this.paginationCount = Math.ceil(this.doors.length/this.paginationNum);
            this.resultDoors = this.doors.slice(this.paginationPosition,  this.paginationPosition + this.paginationNum);
        },
        //фильтер
        filter: function () {
            var dt, vd, ct, prFrom, prTo, colors;
            var doorType = this.doorType, vendor = this.vendor, colorType = this.colorType, priceFrom = this.priceFrom, priceTo = this.priceTo;
            this.doors = this.resetDoors.filter(function (elem) {
                colors = JSON.parse(elem.color);
                dt = doorType.length ? (doorType.indexOf(elem.category) != -1) : true;
                vd = vendor.length ? (vendor.indexOf(elem.vendor) != -1) : true;
                ct = (colorType.length && colorType.length != 2) ? colors.indexOf(colorType[0]) != -1 : true;
                prFrom = priceFrom ? (parseInt(elem.newprice.replace(' ', '')) >=  priceFrom) : true;
                prTo = priceTo ? (parseInt(elem.newprice.replace(' ', '')) <= priceTo): true;
                return dt && vd && ct && prFrom && prTo;
            });

            if(this.doors.length){
                this.noSearch = false;
            }
            else{
                this.noSearch = true;
            }

            this.sortDoorsVal = '';
            this.paginationCount = Math.ceil(this.doors.length/this.paginationNum);
            this.resultDoors = this.doors.slice(this.paginationPosition,  this.paginationPosition + this.paginationNum);
        }
    },

    computed:{
        checkInt: function () {
            if(this.doorType.indexOf('interior') != -1 && this.doorType.indexOf('entry') == -1){
                var pos = this.vendor.indexOf('Интекрон');
                if( ~pos ) this.vendor.splice(pos, 1);
            }
            return this.doorType.length?((this.doorType.indexOf('interior') != -1)?false:true):false;

        },
        checkEnt: function () {
            if(this.doorType.indexOf('entry') != -1 && this.doorType.indexOf('interior') == -1){
                var pos = this.vendor.indexOf('Геона');
                if( ~pos ) this.vendor.splice(pos, 1);
                pos = this.vendor.indexOf('Варадор');
                if( ~pos ) this.vendor.splice(pos, 1);
            }
            return this.doorType.length?((this.doorType.indexOf('entry') != -1)?false:true):false;
        }
    },
    
    watch: {
        sortDoorsVal: function (val) {
            if(val == 'priceAsc') {
                this.doors.sort(sortPriceAsc);
            }
            else if(val == 'priceDesc'){
                this.doors.sort(sortPriceDesc);
            }

            this.paginationPosition = 0;
            this.resultDoors = this.doors.slice(this.paginationPosition,  this.paginationPosition + this.paginationNum);
        }
    }
});

function sortPriceAsc(a,b){
    if (parseInt(a.newprice) > parseInt(b.newprice)) return 1;
    if (parseInt(a.newprice) < parseInt(b.newprice)) return -1;
    return 0;
}

function sortPriceDesc(a,b){
    if (parseInt(a.newprice) < parseInt(b.newprice)) return 1;
    if (parseInt(a.newprice) > parseInt(b.newprice)) return -1;
    return 0;
}

function getRequest() {
    var url = window.location.search.replace('?','');
    var paramArray = url.split('&');
    var param = [];

    paramArray.forEach(function (value) {
        var vl = value.split('=');
        param[vl[0]] = vl[1];
    });

    return param;
}