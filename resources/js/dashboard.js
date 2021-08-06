require('./bootstrap');
import { createApp } from 'vue';
import Dashboard from "./Dashboard.vue";

const app = createApp(Dashboard)
app.mount('#app')