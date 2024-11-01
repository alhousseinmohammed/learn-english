
<?php

use GuzzleHttp\Client;

$client = new Client();
$apiKey = env('OPENAI_API_KEY');  // Replace with your actual API key

try {
    $response = $client->post('https://api.openai.com/v1/chat/completions', [
        'headers' => [
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
        ],
        'json' => [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => 'Hello!'],
            ],
        ],
    ]);

    $data = json_decode($response->getBody(), true);
    echo "AI Response: " . $data['choices'][0]['message']['content'] . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
