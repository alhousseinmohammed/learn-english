<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ExerciseController;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $progress = Progress::all();
        return response()->json(['message' => $progress]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $learner_id = auth()->user()->learner->id;
        $progress = Progress::where('lesson_id', $request->lesson_id)->where('learner_id', $learner_id)->first();
        if (!$progress) {
            $progress = new Progress();
            $progress->lesson_id = $request->lesson_id;
            $learner = auth()->user()->learner;
            $learnerController = new LearnerController;
            $learnerController->progress(10);
            $learner->save();
            $progress->learner_id = $learner_id;
            $progress->save();
        }
        // return redirect()->ac
        return redirect()->action('App\Http\Controllers\LessonController@index');
    }


    // public function store(Request $request)
    // {
    //     // Validate incoming request
    //     $request->validate([
    //         'learner_id' => 'required|exists:learners,id',
    //         'lesson_id' => 'required|exists:lessons,id',
    //     ]);

    //     $learner_id = $request->learner_id;

    //     $progress = Progress::where('lesson_id', $request->lesson_id)
    //         ->where('learner_id', $learner_id)
    //         ->first();

    //     if (!$progress) {
    //         $progress = new Progress();
    //         $progress->lesson_id = $request->lesson_id;
    //         $progress->learner_id = $learner_id;
    //         $progress->save();
    //     }

    //     return response()->json(['message' => 'Progress saved successfully!'], 201);
    // }


    /**
     * Display the specified resource.
     */
    public function show(Progress $progress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progress $progress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Progress $progress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progress $progress)
    {
        //
    }
}
