<form action="{{ url('/text-to-speech') }}" method="GET">
    @csrf
    <label for="text-input">Enter Text:</label>
    <textarea id="text-input" name="text" rows="4" cols="50"></textarea>
    <button type="submit">Convert to Speech</button>
</form>

@if (isset($audioUrl))
    <audio controls autoplay>
        <source src="{{ $audioUrl }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
@endif
