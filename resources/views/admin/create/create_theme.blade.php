<form action="{{ action('App\Http\Controllers\ThemeController@store') }}" method="post">
    @csrf
    <input type="text" name="name">
    <select name="level_id">
        @foreach ($levels as $level)
            <option value="{{ $level->id }}">{{ $level->name }}</option>
        @endforeach
    </select>
</form>
