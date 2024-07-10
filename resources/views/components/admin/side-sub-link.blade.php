@props([ 'active' => false])
<li class=" mb-2">
    <a wire:navigate
        {{ $attributes->merge(['class' => ' gap-3 py-2 px-3 rounded-md ' . ($active ? 'text-accent-600  dark:text-accentDark-5 ' : 'text-gray-600 dark:text-accentDark-3 hover:text-accent-600 dark:hover:text-accentDark-5 ') . 'w-full flex items-center ']) }}>
        <span>{{ $slot }}</span>
    </a>
</li>
