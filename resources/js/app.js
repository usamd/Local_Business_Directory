import './bootstrap';
import { createApp } from 'vue';
import Chat from './chat.vue';
// import Alpine from 'alpinejs'; // Uncomment if you are using Alpine.js

const app = createApp(Chat);
app.mount('#chatapp');

// Uncomment if you are using Alpine.js
// window.Alpine = Alpine;
// Alpine.start();
