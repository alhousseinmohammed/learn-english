<form action="{{ action('App\Http\Controllers\LessonController@store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="title">
    <select name="theme_id" aria-placeholder="theme">
        @foreach ($themes as $theme)
            <option value="{{ $theme->id }}">{{ $theme->name }}</option>
        @endforeach
    </select>
    <input type="number" name="admin_id" placeholder="admin">
    <textarea name="description" id="" cols="30" rows="10" placeholder="content"></textarea>
    <button type="submit">Add</button>
</form>
