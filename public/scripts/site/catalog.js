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
        axios.get('/get-doors-site').then(response => {
            this.doors = response.data;
            this.resetDoors = response.data.slice();
            this.paginationCount = Math.ceil(this.doors.length/this.paginationNum);
            this.resultDoors = this.doors.slice(this.paginationPosition,  this.paginationPosition + this.paginationNum);
        });
    },

    updated: function(){},

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
            var dt, vd, ct, prFrom, prTo;
            var doorType = this.doorType, vendor = this.vendor, colorType = this.colorType, priceFrom = this.priceFrom, priceTo = this.priceTo;
            this.doors = this.resetDoors.filter(function (elem) {
                dt = doorType.length ? (doorType.indexOf(elem.doorType) != -1) : true;
                vd = vendor.length ? (vendor.indexOf(elem.vendor) != -1) : true;
                ct = colorType.length ? (colorType.indexOf(elem.colorType) != -1) : true;
                prFrom = priceFrom ? (parseInt(elem.price.replace(' ', '')) >=  priceFrom) : true;
                prTo = priceTo ? (parseInt(elem.price.replace(' ', '')) <= priceTo): true;
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
    if (parseInt(a.price) > parseInt(b.price)) return 1;
    if (parseInt(a.price) < parseInt(b.price)) return -1;
    return 0;
}

function sortPriceDesc(a,b){
    if (parseInt(a.price) < parseInt(b.price)) return 1;
    if (parseInt(a.price) > parseInt(b.price)) return -1;
    return 0;
}

function getCoords(elem) {
    var box = elem.getBoundingClientRect();
    return box.top + pageYOffset;
}