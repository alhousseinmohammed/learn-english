<?php

namespace App\Http\Controllers;

use App\Models\super;
use Illuminate\Http\Request;

class SuperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('superduolingo');
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
        $learner = auth()->user()->learner;
        $learner->super = true;
        $learner->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(super $super)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(super $super)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, super $super)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(super $super)
    {
        //
    }
}
