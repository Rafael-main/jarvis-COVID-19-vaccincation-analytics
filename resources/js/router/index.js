import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Symptom from '../views/Symptom.vue'
import Vaccine from '../views/Vaccine.vue'



const routes = [{
        path: '/',
        name: 'Home',
        component: Home
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

    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router