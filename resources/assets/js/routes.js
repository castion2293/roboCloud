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
        path: '/weekly_yield',
        component: require('./components/view/WeeklyYield.vue')
    },
    {
        path: '/monthly_yield',
        component: require('./components/view/MonthlyYield.vue')
    },
    {
        path: '/yearly_yield',
        component: require('./components/view/YearlyYield.vue')
    },
];

export default new VueRouter({
    routes,
    //linkActiveClass: 'is-active'
});
