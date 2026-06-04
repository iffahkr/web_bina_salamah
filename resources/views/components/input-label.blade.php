@props(['value'])

<label {{ $attributes->merge(['class' => 'mb-1 block font-medium text-sm text-gray-500']) }}>
    {{ $value ?? $slot }}
</label>
