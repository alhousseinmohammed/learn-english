{{-- @section('content') --}}
<div class="curriculum">
    <h1>Users</h1>
    {{-- <div>
        <h1>{{ __('messages.welcome') }}</h1>
        <a href="{{ url('lang/en') }}">English</a> |
        <a href="{{ url('lang/ar') }}">العربية</a>
        <h1>@lang('messages.welcome')</h1>
        <p>Current locale: {{ App::getLocale() }}</p>
        <p>Current locale: {{ App::getLocale() }}</p>
        <p>Session locale: {{ session('locale') }}</p>

    </div> --}}
    <div class="p-4">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <form wire:submit.prevent="addUser" class="space-y-4">
            <span>
                <label for="name">Name</label>
                <input type="text" id="name" wire:model="name" class="form-input w-full" required>
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </span>

            <span>
                <label for="email">Email</label>
                <input type="email" id="email" wire:model="email" class="form-input w-full" required>
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </span>

            <span>
                <label for="password">Password</label>
                <input type="password" id="password" wire:model="password" class="form-input w-full" required>
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </span>

            <span>
                <label for="role">Role</label>
                <select id="role" wire:model="role" class="form-select w-full">
                    <option value="learner">Learner</option>
                    <option value="admin">Admin</option>
                </select>
                @error('role')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </span>

            <button type="submit" class="button">Add User</button>
        </form>
    </div>

    <a {{-- href="{{ route('users.create') }}" --}} class="btn btn-primary">Add User</a>
    <div class="learner-filter-container">
        <h2 class="filter-title">Learner Filters</h2>
        <form class="filter-form" wire:submit.prevent="updateStatus">
            <div class="filter-group">
                <label for="status">Status:</label>
                <select id="status" name="status" wire:model="status">
                    <option value="">All</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="suspended">Suspended</option>
                </select>
            </div>

            {{-- <div class="filter-group">
                <label for="proficiency">Proficiency Level:</label>
                <select id="proficiency" name="proficiency">
                    <option value="">All Levels</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>
            </div> --}}

            {{-- <div class="filter-group">
                <label>Learning Preferences:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="preference" value="visual"> Visual Learner</label>
                    <label><input type="checkbox" name="preference" value="auditory"> Auditory Learner</label>
                    <label><input type="checkbox" name="preference" value="kinesthetic"> Kinesthetic Learner</label>
                </div>
            </div> --}}
            <input type="text" wire:model="nameSearch" placeholder="Search levels by name"> {{ $nameSearch }}
            <button type="submit" class="filter-button button">Apply Filters</button>
        </form>
    </div>
    <div class="flex-center" x-data= "{expanded: false}">
        <table class="table" border>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name {{ $status }}</th>
                    <th @click="expanded = !expanded">Email</th>
                    <th>Super</th>
                    <th x-show="expanded">League</th>
                    <th x-show="expanded">XP</th>
                    <th x-show="expanded">Streak </th>
                    <th x-show="expanded">Gems</th>
                    <th x-show="expanded">Hearts</th>
                    <th x-show="expanded">Status </th>
                    {{-- <th>Actions</th></tr> --}}
                </tr>
            <tbody>
                @foreach ($users as $user)
                    <tr wire:key="user-{{ $user->id }}">
                        <td>{{ $user->id }}</td>
                        <td x-data="{ clicked: false, value: '{{ $user->name }}' }">
                            <!-- Display the name as a paragraph by default -->
                            <p x-show="!clicked" @dblclick="clicked = true" x-text="value"></p>

                            <!-- Input field for editing -->
                            <input x-show="clicked" x-model="value"
                                @blur="clicked = false; $wire.call('updateName', {{ $user->id }}, value)"
                                type="text" class="form-control">
                        </td>
                        <td x-data="{ clicked: false, value: '{{ $user->email }}' }">
                            <!-- Display the email as a paragraph by default -->
                            <p x-show="!clicked" @dblclick="clicked = true" x-text="value"></p>

                            <!-- Input field for editing -->
                            <input x-show="clicked" x-model="value"
                                @blur="clicked = false; $wire.call('updateEmail', {{ $user->id }}, value)"
                                type="email" class="form-control">
                        </td>

                        {{-- <td>
                        <a href="{{ route('user.edit', $user) }}"class="btn btn-warning">Edit</a>
                        <form action="{{ route('user.destroy', $user) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')`
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td> --}}
                        <td>{{ $user->learner->super ? 'yes' : 'no' }}</td>
                        <td x-show="expanded">{{ $user->learner->league->name ?? 'N/A' }}</td>
                        <td x-show="expanded">{{ $user->learner->experience_points }}</td>
                        <td x-show="expanded">{{ $user->learner->current_streak }}</td>
                        <td x-show="expanded">{{ $user->learner->current_gems }}</td>
                        <td x-show="expanded">{{ $user->learner->current_hearts }}</td>
                        <td x-show="expanded">{{ $user->learner->status->name ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button @click="expanded = !expanded" class="button arrow-button arrow-right"
            aria-label="Arrow button" /></button>

    </div>
</div>
{{-- @endsection --}}
