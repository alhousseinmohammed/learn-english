<table>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form method="POST" action="/learners/follow">
                    @csrf
                    <input type="hidden" name="follower_id" value="{{ auth()->user()->learner->id }}">
                    <!-- Replace with dynamic ID -->
                    <input type="hidden" name="followed_id" value="{{ $user->learner->id }}">
                    <!-- Replace with dynamic ID -->
                    <button type="submit">Follow</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
