@props(['navigate' => true])

<a {{ $navigate ? 'wire:navigate' : '' }}
    {{ $attributes->merge(['class' => 'tblock text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-dark-3 px-2 py-2 rounded-md']) }}>{{ $slot }}</a>
