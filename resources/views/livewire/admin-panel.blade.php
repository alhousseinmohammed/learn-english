<!DOCTYPE html>
<html lang="en">

<head>
    @livewireStyles()
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('duolingo-clone-master/css/learn.css') }}" />
    <link rel="icon" href="{{ url('duolingo-clone-master/assets/images/favicon.ico') }}">
    <title>Duolingo</title>
    <style>
        /* Your existing styles */
    </style>
</head>

<body>
    <div class="container curriculum">
        <nav>
            <button style="display:block" wire:navigate href="{{ route('exercises') }}">Exercises</button>
            <button style="display:block" wire:navigate href="{{ route('lessons') }}">Lessons</button>
        </nav>

        <div id="component-container">
            @livewire('exercises') <!-- Default component -->
        </div>
    </div>

    @livewireScripts()
    <script>
        // JavaScript (if needed) goes here
    </script>
</body>

</html>
