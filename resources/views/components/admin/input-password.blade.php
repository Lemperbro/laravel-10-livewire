@props(['label' => null, 'helper_text' => null])

<!-- Form Group -->
<div class="">
    @if ($label !== null)
        <label for="{{ $attributes['id'] ?? 'email' }}"
            class="block text-sm font-medium mb-2 text-gray-600 dark:text-accentDark-3 capitalize">{{ $label }}</label>
    @endif
    <div class="relative">
        <input
            {{ $attributes->merge(['id' => 'password', 'type' => 'password', 'placeholder' => 'Masukan Password', 'class' => 'py-3 px-4 block w-full border-border-1 rounded-lg text-sm focus:border-accent-600 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-dark-2 dark:border-borderDark-1 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:border-borderDark-2']) }}>
        <button type="button" data-hs-toggle-password='{
"target": "#{{ $attributes['id'] ?? 'password' }}"
}'
            class="absolute top-0 end-0 p-3.5 rounded-e-md">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-accentDark-3" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                <path class="hs-password-active:hidden"
                    d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                <path class="hs-password-active:hidden"
                    d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22">
                </line>
                <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3">
                </circle>
            </svg>
        </button>
    </div>
    @if ($helper_text !== null)
        <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">{{ $helper_text }}</p>
    @endif
</div>
<!-- End Form Group -->
