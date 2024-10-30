<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AnthropicController extends Controller
{
    public function getResponse(Request $request)
    {
        $client = new Client();
        $apiKey = env('ANTHROPIC_API_KEY'); // Ensure this is correctly set
        $userInput = $request->input('message');

        try {
            $response = $client->post('https://api.anthropic.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'messages' => [
                        ['role' => 'user', 'content' => $userInput]
                    ],
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            $reply = $data['completion'] ?? 'No response';

            return response()->json(['reply' => $reply]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to get response from AI: ' . $e->getMessage()], 500);
        }
    }
}
