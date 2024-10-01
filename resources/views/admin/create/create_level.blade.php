<form action="{{ action('App\Http\Controllers\LevelController@store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
</form>
