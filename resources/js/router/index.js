import { createRouter, createWebHistory} from 'vue-router'

import Home from '../views/Home.vue';
import Dashboard from '../views/Dashboard.vue';
import Login from '../views/Login.vue';
import Register from '../views/Register.vue';
import Individual from '../views/Individual.vue';
import Establishment from '../views/Establishment.vue';
import Symptom from '../views/Symptom.vue'
import Vaccine from '../views/Vaccine.vue'
import About from '../views/About.vue'
import NotFound from '../views/NotFound.vue'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        path: '/register',
        name: 'Register',
        component: Register
    },
    {
        path: '/individual',
        name: 'Individual',
        component: Individual
    },
    {
        path: '/establishment',
        name: 'Establishment',
        component: Establishment
    },
    {
        path: '/dashboard',
        name: 'Dsashboard',
        component: Dashboard,
        // meta: { requiresAuth: true }
    },
    {
        path: '/symptom',
        name: 'Symptom',
        component: Symptom
    
    },
    {
        path: '/vaccine',
        name: 'Vaccine',
        component: Vaccine
    
    },
    {
        path: '/about',
        name: 'About',
        component: About
    
    },
    {
        path: "/:catchAll(.*)",
        component: NotFound
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});


// function isLoggedIn() {
//     return localStorage.getItem('token')
// }

// router.beforeEach((to, from) => {
//   // instead of having to check every route record with
//   // to.matched.some(record => record.meta.requiresAuth)
//   if (to.meta.requiresAuth && !isLoggedIn()) {
//     // this route requires auth, check if logged in
//     // if not, redirect to login page.
//     return {
//       path: '/login',
//       // save the location we were at to come back later
//       query: { redirect: to.fullPath },
//     }
//   }
// })

export default router