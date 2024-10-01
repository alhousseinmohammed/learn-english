<?php

namespace App\Http\Controllers;

use App\Models\Learner;
use Illuminate\Http\Request;
use App\Http\Controllers\ExerciseController;


class LearnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     */
    public function show($exerciseId)
    {
        //
        $learner = auth()->user()->learner;
        $learner->current_hearts -= 1;
        $learner->save();
        $exercise = new ExerciseController;
        return $exercise->show($exerciseId);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Learner $learner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Learner $learner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Learner $learner)
    {
        //
    }

    public function earnGems (int $gems_earned) {
            $learner = auth()->user()->learner;
        $learner->current_gems += $gems_earned;
        $learner->save();
        // return redirect()->action('App\Http\Controllers\LessonController@index');
    }

    public function payGems (int $gems_paid) {
                    $learner = auth()->user()->learner;
        if ($learner->current_gems > 0 & $learner->current_gems >= $gems_paid) {
            $learner->current_gems -= $gems_paid;
            $learner->save();
            // return redirect()->action('App\Http\Controllers\LessonController@index');
        }
    }
}