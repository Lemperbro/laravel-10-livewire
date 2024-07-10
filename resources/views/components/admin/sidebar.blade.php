<aside id="application-sidebar-brand"
    class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full overflow-y-auto transform hidden lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 fixed top-0 with-vertical h-screen z-[99] flex-shrink-0 border-r-[1px] w-[270px] border-border-1 dark:border-borderDark-1  bg-white dark:bg-dark-1 left-sidebar transition-transform duration-300">

    <!-- ---------------------------------- -->
    <!-- Start Vertical Layout Sidebar -->
    <!-- ---------------------------------- -->
    <div class="p-5 text-gray-600 dark:text-accentDark-3 flex items-center gap-2">
        <i class="ti ti-brand-google text-[29px]"></i>
        <h1 class="font-semibold">Google Admin</h1>
    </div>
    <div class="overflow-y-auto" data-simplebar="">
        <div class="px-6 mt-8">
            <nav class="hs-accordion-group w-full flex flex-col sidebar-nav">
                <ul id="sidebarnav" class="text-gray-600 dark:text-accentDark-3 text-sm">
                    <li class="text-xs font-bold pb-4">
                        <span>HOME</span>
                    </li>

                    <x-admin.side-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">Dashboard</x-admin.side-link>
                    <x-admin.side-link-dropdown :title="'Pengiriman'" :icon="'ti ti-truck-delivery'" :active="request()->routeIs('pengiriman')">
                        <x-admin.side-sub-link href="{{ route('pengiriman') }}" :active="request()->routeIs('pengiriman')">
                            Data Pengiriman
                        </x-admin.side-sub-link>

                    </x-admin.side-link-dropdown>
                    <x-admin.side-link-dropdown :title="'Transaksi'">
                        <x-admin.side-sub-link :active="false">
                            Semua Transaksi
                        </x-admin.side-sub-link>
                    </x-admin.side-link-dropdown>


                    <x-admin.side-link :icon="'ti ti-users'" :active="false">Manage Kasir</x-admin.side-link>
                    <x-admin.side-link :icon="'ti ti-login'" href="{{ route('login') }}">Login</x-admin.side-link>
                    <x-admin.side-link :icon="'ti ti-menu-order'">Manage Menu</x-admin.side-link>
                    <x-admin.side-link :icon="'ti ti-building-store'">Order</x-admin.side-link>

                    <li class="text-xs font-bold pb-4 pt-4">
                        <span>Users</span>
                    </li>

                    <x-admin.side-link :icon="'ti ti-menu-order'">Manage Menu</x-admin.side-link>
                    <x-admin.side-link :icon="'ti ti-building-store'">Order</x-admin.side-link>

                </ul>
            </nav>
        </div>
    </div>

    <!-- Bottom Upgrade Option -->
    {{-- <div class="m-6  relative">
        <div class="bg-blue-500 p-5 rounded-md flex items-center justify-between">
            <div>
                <h5 class="text-base font-semibold text-gray-700 mb-3">Upgrade to Pro</h5>
                <button class="text-xs font-semibold hover:bg-blue-700 text-white bg-blue-600 rounded-md  px-4 py-2">Buy
                    Pro</button>
            </div>
            <div class="-mt-12 -mr-2">
                <img src="../assets/images/profile/rocket.png" class="max-w-fit" alt="profile" />
            </div>
        </div>
    </div> --}}
    <!-- </aside> -->
</aside>
