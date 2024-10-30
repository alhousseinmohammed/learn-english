{{-- @section('content') --}}
<div class="curriculum">
    <h1>{{ $theme_name ? $theme_name : 'Lessons' }}</h1>
    <form wire:submit.prevent="store">
        <h6>Create</h6>
        @csrf
        <input class="input-field" type="text" wire:model="title" placeholder="title">
        <select class="input-field" wire:model="theme_id" aria-placeholder="theme">
            @foreach ($themes as $theme)
                <option value="{{ $theme->id }}">{{ $theme->name }}</option>
            @endforeach
        </select>
        {{-- <input class="input-field" type="number" name="admin_id" placeholder="admin"> --}}
        <textarea class="input-field" wire:model="description" id="" cols="200" rows="1"
            placeholder="description"></textarea>
        {{-- <button class="button-div create-account-button" type="submit">Add</button> --}}

        <input type="submit" class="btn btn-primary" value="Add Lesson">
    </form>
    <h6>Search</h6>
    <div class="search-box">
        <input type="text" wire:model="titleSearch" wire:change="search" placeholder="Search lessons by title">
        <input type="text" wire:model="descriptionSearch" wire:change="search"
            placeholder="Search lessons by description">
        <select wire:model="themeIdSearch" wire:change="search">
            <option value="All" selected>All</option>
            @foreach ($themes as $theme)
                <option value="{{ $theme->id }}">{{ $theme->name }}</option>
            @endforeach
        </select>
    </div>
    <table class="table" border>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Unit</th>
                <th>Actions</th>
                <th>Description</th>
                <th>Order</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lessons as $lesson)
                <tr wire:key="level-{{ $lesson->id }}">
                    <td>{{ $lesson->id }}</td>
                    <td x-data="{ clicked: false, value: '{{ $lesson->title }}' }" x-key="2">
                        <!-- Display the title as a paragraph -->
                        <p x-show="!clicked" @dblclick="clicked = true" x-text="value"
                            @click=" $dispatch('lesson-selected', [{{ $lesson->id }}])"></p>

                        <!-- Input field for inline editing -->
                        <input x-show="clicked" x-model="value"
                            @blur="clicked = false; $wire.call('updateLessonName', {{ $lesson->id }}, value)"
                            type="text" class="form-control">
                    </td>
                    <td>
                        {{ $lesson->theme->name }}
                    </td>
                    <td>
                        {{-- <a href="{{ route('lessons.edit', $lesson) }}" class="btn btn-warning">Edit</a> --}}
                        <button wire:click="delete({{ $lesson->id }})" class="button style-danger">Delete</button>

                    </td>
                    </td>
                    <!-- Lesson Description (Content) -->
                    <td x-data="{ clicked: false, value: '{{ $lesson->content }}' }">
                        <p x-show="!clicked" @dblclick="clicked = true" x-text="value"></p>
                        <input x-show="clicked" x-model="value"
                            @blur="clicked = false; $wire.call('updateLessonContent', {{ $lesson->id }}, value)"
                            type="text" class="form-control">
                    </td>
                    <!-- Order Field -->
                    <td x-data="{ clicked: false, value: '{{ $lesson->order }}' }">
                        <p x-show="!clicked" @dblclick="clicked = true" x-text="value"></p>
                        <input x-show="clicked" x-model="value"
                            @blur="clicked = false; $wire.call('updateLessonOrder', {{ $lesson->id }}, value)"
                            type="number" min="1" max="{{ $lesson->theme->lessons()->max('order') }}"
                            class="form-control">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- @endsection --}}
