<div class="screen">
    @if ($viewedTheme_id)
        @livewire('lessons', ['theme_id' => $viewedTheme_id], key($viewedTheme_id))
    @endif
    @if ($viewedLesson_id)
        @livewire('exercises', ['lesson_id' => $viewedLesson_id], key($viewedLesson_id * 10))
    @endif
</div>
