<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HuggingFaceController extends Controller
{
    public function getResponse(Request $request)
    {
        $client = new Client();
        $apiKey = env('HUGGING_FACE_API_KEY');
        $userInput = $request->input('message');

        try {
            $response = $client->post('https://api-inference.huggingface.co/models/gpt2', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'inputs' => $userInput,
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            $reply = $data[0]['generated_text'] ?? 'No response';

            return response()->json(['reply' => $reply]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to get response from AI: ' . $e->getMessage()], 500);
        }
    }
}
