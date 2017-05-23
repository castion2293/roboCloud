import VueRouter from 'vue-router';

let routes = [
    {
        path: '/profile',
        component: require('./components/view/Profile.vue')
    },
    {
        path: '/about',
        component: require('./components/view/About.vue')
    },
    {
        path: '/state',
        component: require('./components/view/State.vue')
    }
];

export default new VueRouter({
    routes,
    //linkActiveClass: 'is-active'
});
