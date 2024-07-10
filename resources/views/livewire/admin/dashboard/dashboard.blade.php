<div class="flex flex-col gap-4">
    <div class=" grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 ">
        <x-admin.card-area class="h-36 flex flex-col gap-4">
            <div class="flex justify-between">
                <div
                    class="w-10 h-10 flex items-center justify-center rounded-md border bg-white dark:bg-dark-2 border-border-1 dark:border-borderDark-1 shadow-md">
                    <i class="ti ti-users text-2xl text-accent-400 dark:text-accentDark-5"></i>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h1 class="text-gray-600 dark:text-accentDark-5 text-sm">Title Card</h1>
                    <h1 class="text-gray-600 dark:text-accentDark-5 font-semibold text-[20px]">1000</h1>
                </div>
            </div>
        </x-admin.card-area>
        <x-admin.card-area class="h-36 flex flex-col gap-4">
            <div class="flex justify-between">
                <div
                    class="w-10 h-10 flex items-center justify-center rounded-md border bg-white dark:bg-dark-2 border-border-1 dark:border-borderDark-1 shadow-md">
                    <i class="ti ti-users text-2xl text-accent-400 dark:text-accentDark-5"></i>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h1 class="text-gray-600 dark:text-accentDark-5 text-sm">Title Card</h1>
                    <h1 class="text-gray-600 dark:text-accentDark-5 font-semibold text-[20px]">1000</h1>
                </div>
            </div>
        </x-admin.card-area>
        <x-admin.card-area class="h-36 flex flex-col gap-4">
            <div class="flex justify-between">
                <div
                    class="w-10 h-10 flex items-center justify-center rounded-md border bg-white dark:bg-dark-2 border-border-1 dark:border-borderDark-1 shadow-md">
                    <i class="ti ti-users text-2xl text-accent-400 dark:text-accentDark-5"></i>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h1 class="text-gray-600 dark:text-accentDark-5 text-sm">Title Card</h1>
                    <h1 class="text-gray-600 dark:text-accentDark-5 font-semibold text-[20px]">1000</h1>
                </div>
            </div>
        </x-admin.card-area>
        <x-admin.card-area class="h-36 flex flex-col gap-4">
            <div class="flex justify-between">
                <div
                    class="w-10 h-10 flex items-center justify-center rounded-md border bg-white dark:bg-dark-2 border-border-1 dark:border-borderDark-1 shadow-md">
                    <i class="ti ti-users text-2xl text-accent-400 dark:text-accentDark-5"></i>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h1 class="text-gray-600 dark:text-accentDark-5 text-sm">Title Card</h1>
                    <h1 class="text-gray-600 dark:text-accentDark-5 font-semibold text-[20px]">1000</h1>
                </div>
            </div>
        </x-admin.card-area>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <x-admin.card-area class="h-80"></x-admin.card-area>
        <x-admin.card-area class="h-80"></x-admin.card-area>
    </div>
    <x-admin.card-area>
        <h1 class="text-gray-600 dark:text-accentDark-5 text-xl mb-4">Table With Checkbox</h1>
        <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4 p-1.5">
            <x-admin.table-search />
            <div class="justify-end flex">
                <x-admin.dropdown-btn :id="'filter'">
                    <div class=" flex flex-col ">
                        <h1 class="font-semibold text-sm px-2 mb-1 text-gray-900 dark:text-white">Sort By</h1>
                        <x-admin.dropdown-option href="">Popular</x-admin.dropdown-option>
                        <x-admin.dropdown-option href="">Terbaru</x-admin.dropdown-option>
                        <x-admin.dropdown-option :navigate="false" data-hs-overlay="#tag"
                            class="cursor-pointer">Tag</x-admin.dropdown-option>
                        <x-admin.dropdown-option :navigate="false" data-hs-overlay="#kategori"
                            class="cursor-pointer">Kategori</x-admin.dropdown-option>
                        <x-admin.dropdown-option href="{{ route('dashboard') }}"
                            class="bg-red-600 text-center !text-white hover:!bg-red-500 mt-4">Hapus
                            Filter</x-admin.dropdown-option>
                    </div>
                </x-admin.dropdown-btn>
            </div>
        </div>

        <x-admin.table>
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead class="bg-neutral-100 dark:bg-dark-2">
                    <tr>
                        <x-admin.th class="py-3 ps-4">
                            <x-admin.checkbox :id="'hs-table-checkbox-all'" />
                        </x-admin.th>
                        <x-admin.th wire:click="sortBy('nama_produk')" class="cursor-pointer">
                            Nama Produk

                            @if ($sortField === 'nama_produk')
                                <span>{!! $sortDirection === 'asc' ? '<i class="ti ti-sort-ascending"></i>' : '<i class="ti ti-sort-descending"></i>' !!}</span>
                            @else
                                <i class="ti ti-sort-ascending"></i>
                            @endif
                        </x-admin.th>
                        <x-admin.th wire:click="sortBy('stock')" class="cursor-pointer">
                            Stock

                            @if ($sortField === 'stock')
                                <span>{!! $sortDirection === 'asc' ? '<i class="ti ti-sort-ascending"></i>' : '<i class="ti ti-sort-descending"></i>' !!}</span>
                            @else
                                <i class="ti ti-sort-ascending"></i>
                            @endif
                        </x-admin.th>
                        <x-admin.th wire:click="sortBy('harga_satuan')" class="cursor-pointer">
                            Harga Satuan

                            @if ($sortField === 'harga_satuan')
                                <span>{!! $sortDirection === 'asc' ? '<i class="ti ti-sort-ascending"></i>' : '<i class="ti ti-sort-descending"></i>' !!}</span>
                            @else
                                <i class="ti ti-sort-ascending"></i>
                            @endif
                        </x-admin.th>
                        <x-admin.th wire:click="sortBy('harga_total')" class="cursor-pointer">
                            Harga Total

                            @if ($sortField === 'harga_total')
                                <span>{!! $sortDirection === 'asc' ? '<i class="ti ti-sort-ascending"></i>' : '<i class="ti ti-sort-descending"></i>' !!}</span>
                            @else
                                <i class="ti ti-sort-ascending"></i>
                            @endif
                        </x-admin.th>
                        <x-admin.th class="!text-center">
                            Action
                        </x-admin.th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    @foreach ($products as $items)
                        <tr>
                            <x-admin.td class="py-3 ps-4">
                                <x-admin.checkbox :id="'hs-table-checkbox-all'" />
                            </x-admin.td>
                            <x-admin.td>
                                {{ $items['nama_produk'] }}
                            </x-admin.td>
                            <x-admin.td>
                                {{ $items['stock'] }}
                            </x-admin.td>
                            <x-admin.td>
                                {{ $items['harga_satuan'] }}
                            </x-admin.td>
                            <x-admin.td>
                                {{ $items['harga_total'] }}
                            </x-admin.td>
                            <x-admin.td class="flex items-center justify-center">
                                <x-admin.tableAction>
                                    <div class="flex flex-col ">
                                        <x-admin.dropdown-option href="">Popular</x-admin.dropdown-option>
                                        <x-admin.dropdown-option href="">Popular</x-admin.dropdown-option>
                                        <x-admin.dropdown-option href="">Popular</x-admin.dropdown-option>
                                        <x-admin.dropdown-option href="">Popular</x-admin.dropdown-option>
                                    </div>
                                </x-admin.tableAction>
                            </x-admin.td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-admin.table>
    </x-admin.card-area>

    <x-admin.card-area class="py-8">
        <h1 class="text-gray-600 dark:text-accentDark-5 text-xl mb-4">Form</h1>
        <div class="grid grid-cols-2 gap-4">

            <x-admin.input type="text" :label="'First Name'" id="firstName" name="firstName"></x-admin.input>
            <x-admin.input type="text" :label="'Last Name'" id="lastName" name="lastName"></x-admin.input>
            <x-admin.input type="text" :label="'Username'" id="username" name="Username"></x-admin.input>
            <x-admin.input id="email" :label="'Email'" name="email"></x-admin.input>
            <x-admin.input-password id="password" :label="'Password'" name="password"></x-admin.input-password>
            <x-admin.input-password :label="'Konfirmasi Password'" name="password_confirmation"
                id="password_confirmation"></x-admin.input-password>

        </div>
        <div class="mt-5">
            <x-admin.textarea></x-admin.textarea>
        </div>
        <div class="mt-10 flex justify-end">
            <button type="button"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 bg-button-1 rounded-md hover:bg-button-2 focus:ring-2 focus:ring-offset-2 focus:ring-button-2 focus:shadow-outline focus:outline-none">
                Simpan Data
            </button>
        </div>
    </x-admin.card-area>
</div>
