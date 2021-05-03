
require('./bootstrap');

window.Swal = require('sweetalert2')

window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('categoria', require('./components/Categoria.vue').default);
Vue.component('articulo', require('./components/Articulo.vue').default);

const app = new Vue({
    el: '#app',
    data :{
        menu : 0,
    }        
});

