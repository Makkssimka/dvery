var menuCol = document.querySelector('.menu-collapse');
var menu = document.querySelector('.menu-wrapper');
var content = document.querySelector('.content');
var collapse = false;

menuCol.addEventListener('click', function (e) {
    e.preventDefault();
    if(collapse){
        menu.classList.remove('collapse');
        content.classList.remove('collapseContent');
        collapse = false;
    }
    else{
        menu.classList.add('collapse');
        content.classList.add('collapseContent');
        collapse = true;
    }
});