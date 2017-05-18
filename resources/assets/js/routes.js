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
        path: '/contact',
        component: require('./components/view/Contact.vue')
    }
];

export default new VueRouter({
    routes,
    //linkActiveClass: 'is-active'
});
