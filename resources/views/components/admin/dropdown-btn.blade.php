


@props(['title' => 'Filter', 'id' => 'dropdown'])
<div class="relative inline-flex hs-dropdown">
    <button id="{{ $id }}"
        {{ $attributes->merge(['class' => 'hs-dropdown-toggle inline-flex justify-center w-full rounded-md border border-border-1 dark:border-borderDark-1 bg-neutral-200 dark:bg-dark-2 text-gray-900 dark:text-white shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 focus:outline-none']) }}>
        <span>{{ $title }}</span>
        <svg class="-mr-1 ml-2 h-5 w-5 transform transition-transform duration-200 hs-dropdown-open:rotate-180"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                d="M5.293 7.707a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-56 bg-white shadow-md rounded-lg px-2 py-4 mt-2 dark:bg-dark-2 border border-border-1 dark:border-borderDark-1 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full z-10"
        aria-labelledby="{{ $id }}">
        {{ $slot }}
    </div>
</div>

