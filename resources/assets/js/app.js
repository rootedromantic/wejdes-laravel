
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});


var adminDropdown = new Foundation.AccordionMenu($("#admin-sidebar "));

var adminOffCanvas = new Foundation.OffCanvas($(".admin .content"));
$('[data-toggle="sidebar"]').on('click', function(e) {
    e.preventDefault();
    $(this).parents('.admin .content').toggleClass('shrink-medium').toggleClass('shrink-large');
    if($(this).parents('.admin .content').hasClass('shrink-medium')){
        $('.show-or-hide').addClass('j-show').removeClass('j-hide');
    }else{
        $('.show-or-hide').addClass('j-hide').removeClass('j-show');
    }
    $('.is-accordion-submenu.is-active').each(function(){
        $(this).parents('#admin-sidebar').foundation('hideAll');
    });

    
});
$('.submenu-toggle').on('click', function(e) {
    //e.preventDefault();
    if($('li.show-or-hide').hasClass('j-hide')){
        $(this).parents('.admin .content').toggleClass('shrink-medium').toggleClass('shrink-large');
    }
});

  
