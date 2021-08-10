require('./bootstrap');

import { createApp } from 'vue';
import App from './components/App.vue';
import router from './router';
import axios from 'axios';


axios.defaults.withCredentials = true;

createApp(App).use(router).mount("#app")
