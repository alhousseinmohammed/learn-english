<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\Progress;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
// public function __construct()
// {
//     $this->middleware(['auth', 'admin']);
// }

    public function index()
    {
        //
                    $weekDates = [];

    // Get the start of the week (Monday)
    $startOfWeek = Carbon::now()->startOfWeek(); // Change to startOfWeek(Carbon::MONDAY) if needed

    // Loop through each day of the week (7 days)
    for ($i = 0; $i < 7; $i++) {
        $weekDates[] = $startOfWeek->copy()->addDays($i)->toDateString();
    }

        $progress = $progress = Progress::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))->groupBy('date')->get();

        return view('admin.admin_dashboard')->with('progress', $progress)->with('week',$weekDates);


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
    public function show(League $league)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(League $league)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, League $league)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(League $league)
    {
        //
    }
}
