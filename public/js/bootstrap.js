import Echo from "laravel-echo";
import Pusher from "pusher-js";

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '', // Leave empty for Laravel WebSockets
    cluster: null, // Leave null for local usage
    wsHost: window.location.hostname, // Use the host of your application
    wsPort: 6001, // The port your WebSocket server is running on
    wssPort: 6001, // The secure WebSocket port (if using HTTPS)
    forceTLS: false, // Set to true if using HTTPS
    disableStats: true, // Disable Pusher stats for local
});

// Log to confirm Echo is initialized
console.log("Echo initialized:", window.Echo);
