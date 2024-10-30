import './bootstrap';
import Alpine from 'alpinejs';
import Echo from "laravel-echo";
import Pusher from "pusher-js";

window.Alpine = Alpine;

Alpine.start();

// Initialize Laravel Echo
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    wsHost: window.location.hostname,
    wsPort: 6001,
    wssPort: 6001,
    forceTLS: false,
    disableStats: true,
});

// Listen for the NewMessage event
window.Echo.channel('chat')
    .listen('NewMessage', (e) => {
        console.log(e.message); // Debugging purpose

        // Dynamically call a Livewire method on all instances of the Chat component
        Livewire.emit('messageReceived', e.message);
    });

