require('./bootstrap');


import { createApp } from 'vue';
import App from './views/Home';
import VueApexCharts from "vue3-apexcharts";
import router from './router'

createApp(App).use(VueApexCharts).use(router).mount("#app")
