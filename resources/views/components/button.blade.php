@props([
    'type' => 'button',
    'color' => 'orange',
    'href' => null,
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-sm rounded-md transition focus:outline-none focus:ring-2 focus:ring-offset-2';
    $colors = [
        'orange' => 'bg-orange-500 text-white hover:bg-orange-600 focus:ring-orange-400',
        'gray' => 'bg-gray-200 text-gray-800 hover:bg-gray-300 focus:ring-gray-400',
        'white' => 'bg-white text-slate-800 border border-gray-300 hover:bg-gray-100 focus:ring-gray-400',
    ];
    $classes = $baseClasses . ' ' . ($colors[$color] ?? $colors['orange']) . ' px-4 py-2';
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif

