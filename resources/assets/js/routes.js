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
    {
        path: '/robot_error_log',
        component: require('./components/view/RobotErrorLog.vue')
    },
    {
        path: '/cycle_error_log',
        component: require('./components/view/CycleErrorLog.vue')
    },
    {
        path: '/comm_error_log',
        component: require('./components/view/CommErrorLog.vue')
    },
    {
        path: '/alarm_setting',
        component: require('./components/view/AlarmSetting.vue')
    },
];

export default new VueRouter({
    routes,
    //linkActiveClass: 'is-active'
});
