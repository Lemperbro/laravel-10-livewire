@props(['icon' => 'ti ti-credit-card-pay', 'title' => 'menu', 'active' => false])

<li class="hs-accordion mb-2" id="users-accordion">
    <button type="button"
        class="hs-accordion-toggle hs-accordion-active:dark:text-accentDark-5 hs-accordion-active:dark:hover:bg-accentDark-1  w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{ $active ? 'bg-accent-600 text-white dark:bg-accentDark-1 dark:text-accentDark-5 ' : 'hs-accordion-active:text-accent-600 hs-accordion-active:hover:bg-accent-500  text-gray-600 dark:text-accentDark-3 hover:text-accent-600 hover:bg-accent-500 dark:hover:text-accentDark-5 dark:hover:bg-accentDark-1 ' }} rounded-lg group">
        <i class="{{ $icon }} text-xl"></i><span>{{ $title }}</span>

        <svg class="hs-accordion-active:block ms-auto hidden size-4 {{ $active ? 'hs-accordion-active:text-white dark:text-accentDark-5' : 'hs-accordion-active:text-accent-600 group-hover:text-accent-600 dark:text-accentDark-3' }}    hs-accordion-active:dark:text-accentDark-5   group-hover:dark:text-accentDark-5  "
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m18 15-6-6-6 6" />
        </svg>

        <svg class="hs-accordion-active:hidden ms-auto size-4 {{ $active ? 'hs-accordion-active:text-white dark:text-accentDark-5' : 'hs-accordion-active:text-accent-600 group-hover:text-accent-600 dark:text-accentDark-3' }}    hs-accordion-active:dark:text-accentDark-5   group-hover:dark:text-accentDark-5  "
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m6 9 6 6 6-6" />
        </svg>
    </button>

    <div id="users-accordion"
        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
        <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
            {{ $slot }}
        </ul>
    </div>
</li>
