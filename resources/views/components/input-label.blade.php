@props(['for', 'value'])

<label for="{{ $for }}" class="block text-sm font-medium text-gray-700">
    {{ $value ?? $slot }}
</label>
