{{-- @section('content') --}}
<div class="curriculum">
    <h1>Levels</h1>
    {{-- <a href="{{ route('levels.create') }}" class="btn btn-primary">Add Level</a> --}}
    <form wire:submit.prevent="store">
        <h6>Creat</h6>
        <input wire:model="name" type="text" class="input-field" placeholder="Enter level name">
        <input type="submit" class="button btn-success" value="Add Level">
    </form>
    <div class="search-box">
        <h6>Search</h6>
        <input type="text" wire:model="nameSearch" wire:change="search" placeholder="Search levels by name">
    </div>
    <table border>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($levels as $level)
                <tr wire:key="level-{{ $level->id }}" wire:key="level-{{ $level->id }}">
                    <td>{{ $level->id }}</td>
                    <td x-data="{ clicked: false, value: '{{ $level->name }}' }">
                        <!-- Display the name as a paragraph by default -->
                        <p x-show="!clicked" @dblclick="clicked = true" x-text="value"></p>

                        <!-- Input field for editing -->
                        <input x-show="clicked" x-model="value"
                            @blur="clicked = false; $wire.call('updateName', {{ $level->id }}, value)" type="text"
                            class="form-control">
                    </td>

                    <td>
                        {{-- <a href="{{ route('levels.edit', $level) }}" class="btn btn-warning">Edit</a> --}}
                        <button wire:click="delete({{ $level->id }})" class="button style-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- @endsection --}}
