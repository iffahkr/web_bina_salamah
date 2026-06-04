@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'px-2 py-2 border-b-3 border-gray-400 focus:border-indigo-300 focus:ring-indigo-300 rounded-lg shadow-sm']) }}>
