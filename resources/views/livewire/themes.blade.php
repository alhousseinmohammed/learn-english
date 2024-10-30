<div class="curriculum">
    <h1>Themes</h1>
    <form wire:submit.prevent="store">
        <h6>create</h6>
        <input wire:model="name" type="text" class="input-field" placeholder="Enter theme name">{{ $name }}
        <select wire:model="level_id"> {{ $level_id }}
            @foreach ($levels as $level)
                <option value="{{ $level->id }}">{{ $level->name }}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-primary" value="Add Theme">
    </form>
    <h6>search</h6>
    <div class="search-box">
        <input type="text" wire:model="nameSearch" wire:change="search" placeholder="Search levels by name">
        <select wire:model="levelNameSearch" wire:change="search">
            <option value="All">All</option>
            @foreach ($levels as $level)
                <option value="{{ $level->id }}">{{ $level->name }}</option>
            @endforeach
        </select>
    </div>
    {{-- <a href="{{ route('lesson.create') }}">Add Themes</a> --}}
    <table class="table" border class="curriculm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($themes as $theme)
                <tr wire:key="level-{{ $theme->id }}">
                    <td>{{ $theme->id }}</td>

                    <!-- Inline Editing for Name -->
                    <td x-data="{ clicked: false, value: '{{ $theme->name }}' }" x-key="1">
                        <p x-show="!clicked" @dblclick="clicked = true" x-text="value"
                            @click=" $dispatch('theme-selected', [{{ $theme->id }}])">
                        </p>
                        <input x-show="clicked" x-model="value"
                            @blur="clicked = false; $wire.call('updateThemeName', {{ $theme->id }}, value)"
                            type="text" class="form-control">
                    </td>
                    {{-- level name --}}
                    <td x-data="{ clicked: false, value: '{{ $theme->level->name }}' }">
                        <p x-show="!clicked" @dblclick="clicked = true" x-text="value"></p>
                        <input x-show="clicked" x-model="value"
                            @blur="clicked = false; $wire.call('updateLevelName', {{ $theme->level->id }}, value)"
                            type="text" class="form-control">
                    </td>
                    <!-- Actions -->
                    <td>
                        {{-- <a href="{{ route('theme.edit', $theme) }}" class="btn btn-warning">Edit</a> --}}
                        <button wire:click="delete({{ $theme->id }})" class="button style-danger">Delete</button>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
