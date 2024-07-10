 <!--  Header Start -->
 <header
     class="left-0 bg-white dark:bg-dark-1 border-b-[1px] border border-border-1 dark:border-borderDark-1 lg:pl-[270px] fixed z-20  full-container w-full  text-sm  py-4">
     <div class="container  w-full ">

         <!-- ========== HEADER ========== -->

         <nav class=" w-full   flex items-center justify-between" aria-label="Global">
             <ul class="icon-nav flex items-center gap-4">
                 <li class="relative lg:hidden">
                     <a class="text-xl  icon-hover cursor-pointer text-heading" id="headerCollapse"
                         data-hs-overlay="#application-sidebar-brand" aria-controls="application-sidebar-brand"
                         aria-label="Toggle navigation" href="javascript:void(0)">
                         <i class="ti ti-menu-2 relative z-1 text-gray-600 dark:text-accentDark-5"></i>
                     </a>
                 </li>

                 <li class="relative">
                     <div class="hs-dropdown relative inline-flex [--placement:bottom-left] sm:[--trigger:click]">
                         <div
                             class="relative hs-dropdown-toggle inline-flex  icon-hover text-gray-600 dark:text-accentDark-4">
                             <i class="ti ti-bell-ringing text-xl md:text-2xl relative z-[1]"></i>
                             <div
                                 class="absolute inline-flex items-center justify-center  text-white text-[11px] font-medium  bg-blue-600 w-2 h-2 rounded-full -top-[1px] -right-[6px]">
                             </div>
                         </div>
                         <div class="bg-white hs-dropdown-menu transition-[opacity,margin] border border-gray-400 rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[300px] hidden z-[12]"
                             aria-labelledby="hs-dropdown-custom-icon-trigger">
                             <div>
                                 <h3 class="text-gray-600 font-semibold text-base px-6 py-3">Notification
                                 </h3>
                                 <ul class="list-none  flex flex-col">
                                     <li>
                                         <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                                             <p class="text-sm text-gray-600 font-semibold">Roman Joined
                                                 the Team!</p>
                                             <p class="text-xs text-gray-500 font-medium">Congratulate
                                                 him</p>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                                             <p class="text-sm text-gray-600 font-semibold">New message
                                                 received</p>
                                             <p class="text-xs text-gray-500 font-medium">Salma sent you
                                                 new message</p>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                                             <p class="text-sm text-gray-600 font-semibold">New Payment
                                                 received</p>
                                             <p class="text-xs text-gray-500 font-medium">Check your
                                                 earnings</p>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                                             <p class="text-sm text-gray-600 font-semibold">Jolly
                                                 completed tasks</p>
                                             <p class="text-xs text-gray-500 font-medium">Assign her new
                                                 tasks</p>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                                             <p class="text-sm text-gray-600 font-semibold">Roman Joined
                                                 the Team!</p>
                                             <p class="text-xs text-gray-500 font-medium">Congratulate
                                                 him</p>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>

                 </li>
             </ul>
             <div class="flex items-center gap-8 ">
                 <div class="flex gap-4 items-center">
                     <x-admin.command />
                     <div class=" flex items-center justify-center">
                         <button type="button"
                             class="theme-toggle group flex items-center text-gray-600 hover:text-blue-600 font-medium dark:text-neutral-400 dark:hover:text-neutral-300">
                             <i id="theme-toggle-dark-icon" class="hidden ti ti-moon-stars text-xl md:text-2xl "></i>
                             <i id="theme-toggle-light-icon"
                                 class="hidden ti ti-brightness-down text-xl md:text-2xl "></i>
                         </button>
                     </div>
                 </div>
                 <x-admin.user-btn />



             </div>
         </nav>

         <!-- ========== END HEADER ========== -->
     </div>
 </header>
 <!--  Header End -->
