<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Exercise;
use Illuminate\Support\Facades\Storage;

class TextToSpeechController extends Controller
{
    public function convertTextToSpeech(Request $request)
    {
        $text = $request->input('text');
        if (empty($text)) {
            return back()->with('error', 'Text input is required');
        }

        $client = new Client();
        $fileName = 'speech_' . time() . '.mp3';
        $filePath = public_path('audios/' . $fileName);

        try {
            $response = $client->request('GET', 'https://translate.google.com/translate_tts', [
                'query' => [
                    'ie' => 'UTF-8',
                    'q' => $text,
                    'tl' => 'en',
                    'client' => 'tw-ob'
                ],
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0'
                ]
            ]);

            if ($response->getStatusCode() === 200 && $response->getBody()) {
                // Save the audio file
                file_put_contents($filePath, $response->getBody());

                // Return the path of the saved audio file
                $audioUrl = asset('audios/' . $fileName);
            } else {
                return back()->with('error', 'Failed to generate speech');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

        $exercise = new Exercise();
        $exercise->question = $request->question;
        $exercise->answer = $request->answer;
        $exercise->lesson_id = $request->lesson_id;
        $exercise->admin_id = $request->admin_id;
        $exercise->type = $request->type;

        if($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('audios'), $filename);
            $exercise->image = $filename;

        }


        $exercise->save();
        return redirect()->action('App\Http\Controllers\ExerciseController@show', $exercise->id);

    }
}
