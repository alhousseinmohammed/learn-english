<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Lesson;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ProgressController;
use function Laravel\Prompts\form;
use function PHPUnit\Framework\directoryExists;

class ExerciseController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('map');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($type)
    {
        //
        return view('create_' . $type)->with('lessons', Lesson::with('theme')->get());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);


        if ($request->type == "listen") {
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
        }

//

        if($request->type == 'picture' && $request->file('image')) {
            $file = $request->file('image');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
        }

        $lesson = Lesson::with('exercises')->find($request->lesson_id);
$lastOrder = $lesson ? $lesson->exercises->max('order') : null;

        $exercise = new Exercise();
        $exercise->question = $request->question;
        $exercise->answer = $request->answer;
        $exercise->lesson_id = $request->lesson_id;
        $exercise->admin_id = $request->admin_id;
        $exercise->type = $request->type;
        $exercise->order = $lastOrder + 1;
        if (isset($fileName))
        {$exercise->image = $fileName;}
        if($request->has('options')) {

            // $exercise->option
            $options = json_encode($request->options);
            $exercise->options = $options;
        }


        $exercise->save();
        return redirect()->action('App\Http\Controllers\ExerciseController@show', $exercise->id);
        // return response()->json(["message" => "done!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $exercise = Exercise::find($id);
        return view($exercise->type)->with ('exercise', $exercise);
    }
     public function showNext($id)
    {
        //
        $exercise = Exercise::find($id);
        $nextOrder = $exercise->order + 1;
        $next = Exercise::where('order', $nextOrder)->where('lesson_id', $exercise->lesson_id)->first();


if (!$next) {

        // $response = Http::post(route('progress.store'), [
        //     'lesson_id' => $exercise->lesson_id
        // ]);
            $request = new Request(["lesson_id" => $exercise->lesson_id]);
            $progress = new ProgressController();
            return $progress->store($request);
}
        return view($next->type)->with ('exercise', $next);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercise $exercise)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercise $exercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercise $exercise)
    {
        //
    }
}
