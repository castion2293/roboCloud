import VueRouter from 'vue-router';

let routes = [
    {
        path: '/about',
        component: require('./components/view/About.vue')
    },
    {
        path: '/contact',
        component: require('./components/view/Contact.vue')
    }
];

export default new VueRouter({
    routes,
    //linkActiveClass: 'is-active'
});
