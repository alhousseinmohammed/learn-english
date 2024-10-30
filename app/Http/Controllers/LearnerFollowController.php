<?php

namespace App\Http\Controllers;

use App\Models\Learner;
use Illuminate\Http\Request;

class LearnerFollowController extends Controller
{
    public function store(Request $request)
    {
        $follower = Learner::find($request->follower_id);
        $followed = Learner::find($request->followed_id);

        if ($follower && $followed && $follower->id !== $followed->id) {
            $follower->following()->attach($followed->id);
            return response()->json(['message' => 'Successfully followed!']);
        }

        return response()->json(['error' => 'Invalid follow request.' . $followed], 400);
    }

    public function destroy(Request $request)
    {
        $follower = Learner::find($request->follower_id);
        $follower->following()->detach($request->followed_id);

        return response()->json(['message' => 'Successfully unfollowed!']);
    }
}
