require('./bootstrap');
import { createApp } from 'vue';
import Dashboard from "./Dashboard.vue";
import VueApexCharts from "vue3-apexcharts";

const app = createApp(Dashboard)
app.use(VueApexCharts)
app.mount('#app')