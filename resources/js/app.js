
require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('categoria', require('./components/Categoria.vue').default);

const app = new Vue({
    el: '#app',
    data :{
        menu : 0,
    }        
});

