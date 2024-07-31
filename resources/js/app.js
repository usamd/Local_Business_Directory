import './bootstrap';
import { createApp } from 'vue';
import Chat from './chat.vue';
import Settings from './settings.vue';
// import Alpine from 'alpinejs'; // Uncomment if you are using Alpine.js

// Create and mount the Chat app
const chatApp = createApp(Chat);
chatApp.mount('#chatapp');

// Create and mount the Settings app
const settingsApp = createApp(Settings);
settingsApp.mount('#settings');

// Uncomment if you are using Alpine.js
// window.Alpine = Alpine;
// Alpine.start();
