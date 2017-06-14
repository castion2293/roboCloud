import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        redirect: '/spec'
    },
    {
        path: '/profile',
        component: require('./components/view/Profile.vue')
    },
    {
        path: '/spec',
        component: require('./components/view/Spec.vue')
    },
    {
        path: '/state',
        component: require('./components/view/State.vue')
    },
    {
        path: '/yield',
        component: require('./components/view/Yield.vue')
    },
];

export default new VueRouter({
    routes,
    //linkActiveClass: 'is-active'
});
