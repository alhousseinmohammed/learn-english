<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Language Assistant</title>
    <script>
        async function sendMessage() {
            const userMessage = document.getElementById('userInput').value;
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            try {
                const response = await fetch('/api/language-assistant', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken, // Add CSRF token here
                    },
                    body: JSON.stringify({
                        message: userMessage
                    }),
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();
                document.getElementById('chatbox').innerHTML +=
                    `<p><b>You:</b> ${userMessage}</p>`;
                document.getElementById('chatbox').innerHTML +=
                    `<p><b>Bot:</b> ${data.reply}</p>`;
                document.getElementById('userInput').value = '';
            } catch (error) {
                console.error('There was a problem with the fetch operation:', error);
                alert('Error: Could not connect to the server.');
            }
        }
    </script>
</head>

<body>
    <div id="chatbox" style="border:1px solid #ccc; padding:10px; height:300px; overflow-y:scroll;"></div>
    <input type="text" id="userInput" placeholder="Ask me anything...">
    <button onclick="sendMessage()">Send</button>
</body>

</html>
