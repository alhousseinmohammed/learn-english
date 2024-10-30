<div class="flex">
    <!-- Your chat UI here -->
    <div id="chat-messages">
        @foreach ($messages as $message)
            <div class="alert">
                <strong>{{ $message->sender->name }}</strong>: {{ $message->content }}
                {{-- <strong>{{ $message['sender'] }}:</strong> {{ $message['content'] }} --}}
            </div>
        @endforeach
    </div>
    <div>
        <input type="text" wire:model="newMessage" placeholder="Type a message..." />
        <button wire:click="sendMessage" class="button style-success">Send</button>
    </div>
</div>

<!-- Include Pusher.js from CDN -->
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>

<!-- Laravel Echo from CDN -->
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.0/dist/echo.iife.js"></script>

<script>
    // Initialize Echo
    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: '{{ env('PUSHER_APP_KEY') }}',
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        encrypted: true
    });

    console.log("Echo initialized:", window.Echo);

    // Listen to the 'chat' channel
    window.Echo.channel('chat')
        .listen('NewMessage', (e) => {
            console.log(e.message); // Log the received message for debugging
            // Update your chat UI here to display the new message
        });
</script>

<script>
    window.Echo.channel('chat')
        .listen('NewMessage', (e) => {
            console.log('Received event:', e); // Check the event payload

            // Select the chat messages container
            const chatMessagesDiv = document.getElementById('chat-messages');

            // Create a new div for the incoming message
            const newMessageDiv = document.createElement('div');
            newMessageDiv.innerHTML =
                `<div class='alert'><strong>${e.message.sender}:</strong> ${e.message.content}</div>`;

            // Append the new message to the chat
            chatMessagesDiv.appendChild(newMessageDiv);

            // Optional: Scroll to the bottom of the chat after adding the new message
            chatMessagesDiv.scrollTop = chatMessagesDiv.scrollHeight;
        });
</script>
