<div class="flex flex-col gap-4">
    <div class=" grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 ">
        <x-admin.card-area class="h-36 flex flex-col gap-4">
            <div class="flex justify-between">
                <div
                    class="w-10 h-10 flex items-center justify-center rounded-md border bg-white dark:bg-dark-2 border-border-1 dark:border-borderDark-1 shadow-md">
                    <i class="ti ti-circle-x text-2xl text-red-500"></i>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h1 class="text-gray-600 dark:text-accentDark-5 text-sm">Dibatalkan</h1>
                    <h1 class="text-gray-600 dark:text-accentDark-5 font-semibold text-[20px]">1000</h1>
                </div>
            </div>
        </x-admin.card-area>
        <x-admin.card-area class="h-36 flex flex-col gap-4">
            <div class="flex justify-between">
                <div
                    class="w-10 h-10 flex items-center justify-center rounded-md border bg-white dark:bg-dark-2 border-border-1 dark:border-borderDark-1 shadow-md">
                    <i class="ti ti-package text-2xl text-yellow-600"></i>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h1 class="text-gray-600 dark:text-accentDark-5 text-sm">Sedang Dikemas</h1>
                    <h1 class="text-gray-600 dark:text-accentDark-5 font-semibold text-[20px]">1000</h1>
                </div>
            </div>
        </x-admin.card-area>
        <x-admin.card-area class="h-36 flex flex-col gap-4">
            <div class="flex justify-between">
                <div
                    class="w-10 h-10 flex items-center justify-center rounded-md border bg-white dark:bg-dark-2 border-border-1 dark:border-borderDark-1 shadow-md">
                    <i class="ti ti-truck-delivery text-2xl text-accent-400 "></i>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h1 class="text-gray-600 dark:text-accentDark-5 text-sm">Perjalanan</h1>
                    <h1 class="text-gray-600 dark:text-accentDark-5 font-semibold text-[20px]">1000</h1>
                </div>
            </div>
        </x-admin.card-area>

        <x-admin.card-area class="h-36 flex flex-col gap-4">
            <div class="flex justify-between">
                <div
                    class="w-10 h-10 flex items-center justify-center rounded-md border bg-white dark:bg-dark-2 border-border-1 dark:border-borderDark-1 shadow-md">
                    <i class="ti ti-packages text-2xl text-green-600"></i>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h1 class="text-gray-600 dark:text-accentDark-5 text-sm">Berhasil Dikirim</h1>
                    <h1 class="text-gray-600 dark:text-accentDark-5 font-semibold text-[20px]">1000</h1>
                </div>
            </div>
        </x-admin.card-area>
    </div>

    <x-admin.card-area>
        <h1 class="text-gray-600 dark:text-accentDark-5 text-xl mb-4">Data Pengiriman</h1>
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
                        <x-admin.th>
                            No
                        </x-admin.th>
                        <x-admin.th>
                            Resi
                        </x-admin.th>
                        <x-admin.th>
                            Expedisi
                        </x-admin.th>
                        <x-admin.th>
                            Total Biaya
                        </x-admin.th>
                        <x-admin.th>
                            Status
                        </x-admin.th>
                        <x-admin.th class="!text-center">
                            Action
                        </x-admin.th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    <tr>
                        <x-admin.td>
                            1
                        </x-admin.td>
                        <x-admin.td>
                            864896234673467
                        </x-admin.td>
                        <x-admin.td>
                            J&T
                        </x-admin.td>
                        <x-admin.td>
                            Rp. 100.000
                        </x-admin.td>
                        <x-admin.td>
                            <div class="">
                                <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-800/30 dark:text-yellow-500">Sedang Dikirim</span>
                            </div>
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
                </tbody>
            </table>
        </x-admin.table>
</div>


</x-admin.card-area>
</div>
