import Vue from 'vue';
import VueRouter from 'vue-router';

import Welcome from '../views/Welcome.vue'
import Help from '../views/Help.vue'

const routes =[
    {
        path:'/',
        name:'Welcome',
        component:Welcome
    },    
    {
        path:'/help',
        name:'Help',
        component:Help
    },

];

Vue.use(VueRouter);

export default new VueRouter({
    routes,
    mode: 'history'
})