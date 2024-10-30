<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LanguageAssistantController extends Controller
{
    public function assist(Request $request)
    {
        $client = new Client();
        $apiKey = env('OPENAI_API_KEY');  // Store the API key in the .env file

        $response = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => "Bearer $apiKey",
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a helpful language tutor.'],
                    ['role' => 'user', 'content' => $request->input('message')],
                ],
            ],
        ]);

        $responseBody = json_decode($response->getBody(), true);
        return response()->json([
            'reply' => $responseBody['choices'][0]['message']['content']
        ]);
    }
}
