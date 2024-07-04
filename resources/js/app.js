import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import Alpine from 'alpinejs'


window.Alpine = Alpine;
Alpine.start();

createApp(App).mount('#chatapp');