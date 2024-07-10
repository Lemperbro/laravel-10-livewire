@props(['label' => null, 'helper_text' => null])

<div class="">
    @if ($label !== null)
        <label for="{{ $attributes['id'] ?? 'textarea' }}"
            class="block text-sm font-medium mb-2 text-gray-600 dark:text-accentDark-3 capitalize">{{ $label }}</label>
    @endif
    <textarea
        {{ $attributes->merge(['id' => 'textarea', 'rows' => '3', 'placeholder' => 'Say hi.....', 'class' => 'py-3 px-4 block w-full border-border-1 rounded-lg text-sm focus:border-accent-600 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-dark-2 dark:border-borderDark-1 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:border-borderDark-2']) }}></textarea>
    @if ($helper_text !== null)
        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">{{ $helper_text }}</p>
    @endif
</div>
