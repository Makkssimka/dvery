document.addEventListener('scroll', function () {
    var pageScroll = window.pageYOffset;
    var mapPos = getCoords(document.querySelector('.map-wrapper'));
    var ipPos = getCoords(document.querySelector('.ip-wrapper'));
    if(pageScroll > mapPos - 225 && pageScroll < ipPos- 45){
        document.querySelector('.scroll-but').classList.add('scroll-visible');
    }
    else{
        document.querySelector('.scroll-but').classList.remove('scroll-visible');
    }
});

function getCoords(elem) { // кроме IE8-
    var box = elem.getBoundingClientRect();
    return box.top + pageYOffset;
}