<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\User;
use App\Models\Exercise;
use App\Models\Progress;
use App\Models\Theme;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $lessons = Lesson::with('theme')->get();
        $lessons = Lesson::with('exercises')->get();
        $themes = Theme::with(['lessons.exercises'])->get();

        $learner_id = auth()->user()->learner->id;

        $lastOrder = auth()->user()->learner->progress()
    ->with('lesson') // Load the related lessons
    ->get() // Retrieve the progress records
    ->max('lesson.order'); //

        $lastTheme = auth()->user()->learner->progress()
    ->with('lesson')->with('lesson.theme') // Load the related lessons
    ->get() // Retrieve the progress records
    ->max('lesson.theme.order'); //


        if ($lastTheme) {
            $lastInTheme = Theme::where('order', $lastTheme)->first()->lessons->max('order');
        } else {
            $lastInTheme = null;
        }

        // if($lastOrder){
        //     $lastOrder = $lastOrder->lesson('order')->load('lesson',);
        // }else{
        //     $lastOrder = 0;
        // }
    return view(view: 'superduolingo')->with('themes',$themes)->with('lastLesson',$lastOrder)->with('lastTheme', $lastTheme)->with('lastInTheme', $lastInTheme);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.create.create_lesson')->with('themes', Theme::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $theme = Theme::with('lessons')->find($request->theme_id);
$lastOrder = $theme->lessons ? $theme->lessons->max('order') : 0;

        //
        $lesson = new Lesson();
        $lesson->content = $request->description;
        $lesson->theme_id = $request->theme_id;
        $lesson->admin_id = $request->admin_id;
        $lesson->title = $request->title;
        $lesson->order = $lastOrder + 1;
        $lesson->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
        return view('map');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
