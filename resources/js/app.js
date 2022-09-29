import './bootstrap';

// teste vue

import { createApp } from 'vue';
import Chat from "./Chat.vue";

createApp(Chat).mount("#app");



import '../css/app.css'; 
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
