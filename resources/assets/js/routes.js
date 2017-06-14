import VueRouter from 'vue-router';

let routes = [
    {
        path: '/profile',
        component: require('./components/view/Profile.vue')
    },
    {
        path: '/spec/:productId',
        component: require('./components/view/Spec.vue'),
        props: true
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
