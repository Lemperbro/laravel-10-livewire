<div x-data="{
    commandOpen: false,
}" x-init="$watch('commandOpen', function(value) {
    if (value === true) {
        document.body.classList.add('overflow-hidden');
        $nextTick(() => { window.dispatchEvent(new CustomEvent('command-input-focus', {})); });
    } else {
        document.body.classList.remove('overflow-hidden');
    }
})" @keydown.escape.window="commandOpen = false"
    class="relative z-50 w-auto h-auto">
    <button @click="commandOpen=true"
        class="group flex items-center text-gray-600 hover:text-blue-600 font-medium dark:text-neutral-400 dark:hover:text-neutral-300  justify-center">
        <i class="ti ti-search text-xl"></i>
    </button>
    <template x-teleport="body">

        <div x-show="commandOpen"
            class="fixed top-0 left-0 z-[100] backdrop-blur-sm flex items-center justify-center w-screen h-screen"
            x-cloak>
            <div x-show="commandOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-300"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="commandOpen=false"
                class="absolute inset-0 w-full h-full bg-black bg-opacity-40">
            </div>
            <div x-show="commandOpen" x-trap.inert.noscroll="commandOpen" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-data="{
                    commandItems: {
                        suggestions: [{
                                title: 'Calendar',
                                value: 'calendar',
                                icon: 'ti ti-calendar-clock text-lg mr-2',
                                default: true,
                            },
                            {
                                title: 'Search Emoji',
                                value: 'emoji',
                                icon: 'ti ti-calendar-clock text-lg mr-2',
                                default: true,
                            },
                            {
                                title: 'Calculator',
                                value: 'calculator',
                                icon: 'ti ti-calendar-clock text-lg mr-2',
                                default: true,
                            }
                        ],
                        lainnya: [{
                                title: 'Profile',
                                value: 'profile',
                                icon: 'ti ti-calendar-clock text-lg mr-2',
                                right: '⌘P',
                                default: true,
                            },
                            {
                                title: 'Billing',
                                value: 'billing',
                                icon: 'ti ti-calendar-clock text-lg mr-2',
                                right: '⌘B',
                                default: true,
                            },
                            {
                                title: 'Settings',
                                value: 'settings',
                                icon: 'ti ti-calendar-clock text-lg mr-2',
                                right: '⌘S',
                                default: true,
                            },
                            {
                                title: 'Keyboard Settings',
                                value: 'keyboard-settngs',
                                icon: 'ti ti-calendar-clock text-lg mr-2',
                                right: '⌘K',
                                default: true,
                            },
                
                        ]
                    },
                    commandItemsFiltered: [],
                    commandItemActive: null,
                    commandItemSelected: null,
                    commandId: $id('command'),
                    commandSearch: '',
                    commandSearchIsEmpty() {
                        return this.commandSearch.length == 0;
                    },
                    commandItemIsActive(item) {
                        return this.commandItemActive && this.commandItemActive.value == item.value;
                    },
                    commandItemActiveNext() {
                        let index = this.commandItemsFiltered.indexOf(this.commandItemActive);
                        if (index < this.commandItemsFiltered.length - 1) {
                            this.commandItemActive = this.commandItemsFiltered[index + 1];
                            this.commandScrollToActiveItem();
                        }
                    },
                    commandItemActivePrevious() {
                        let index = this.commandItemsFiltered.indexOf(this.commandItemActive);
                        if (index > 0) {
                            this.commandItemActive = this.commandItemsFiltered[index - 1];
                            this.commandScrollToActiveItem();
                        }
                    },
                    commandScrollToActiveItem() {
                        if (this.commandItemActive) {
                            activeElement = document.getElementById(this.commandItemActive.value + '-' + this.commandId)
                            if (!activeElement) return;
                
                            newScrollPos = (activeElement.offsetTop + activeElement.offsetHeight) - this.$refs.commandItemsList.offsetHeight;
                            if (newScrollPos > 0) {
                                this.$refs.commandItemsList.scrollTop = newScrollPos;
                            } else {
                                this.$refs.commandItemsList.scrollTop = 0;
                            }
                        }
                    },
                    commandSearchItems() {
                        if (!this.commandSearchIsEmpty()) {
                            searchTerm = this.commandSearch.replace(/\*/g, '').toLowerCase();
                            this.commandItemsFiltered = this.commandItems.filter(item => item.title.toLowerCase().startsWith(searchTerm));
                
                            this.commandScrollToActiveItem();
                        } else {
                            this.commandItemsFiltered = this.commandItems.filter(item => item.default);
                        }
                        this.commandItemActive = this.commandItemsFiltered[0];
                    },
                    commandShowCategory(item, index) {
                        if (index == 0) return true;
                        if (typeof this.commandItems[index - 1] === 'undefined') return false;
                        return item.category != this.commandItems[index - 1].category;
                    },
                    commandCategoryCapitalize(string) {
                        return string.charAt(0).toUpperCase() + string.slice(1);
                    },
                    commandItemsReorganize() {
                        commandItemsOriginal = this.commandItems;
                        keys = Object.keys(this.commandItems);
                        this.commandItems = [];
                        keys.forEach((key, index) => {
                            for (i = 0; i < commandItemsOriginal[key].length; i++) {
                                commandItemsOriginal[key][i].category = key;
                                this.commandItems.push(commandItemsOriginal[key][i]);
                            }
                        });
                    }
                }"
                x-init="commandItemsReorganize();
                commandSearchItems();
                $watch('commandSearch', value => commandSearchItems());
                $watch('commandItemSelected', function(item) {
                    if (item) {
                        console.log('item:', item);
                    }
                });" @keydown.down="event.preventDefault(); commandItemActiveNext();"
                @keydown.up="event.preventDefault(); commandItemActivePrevious()"
                @keydown.enter="commandItemSelected=commandItemActive;"
                @command-input-focus.window="$refs.commandInput.focus();"
                class="flex min-h-[370px] justify-center w-full max-w-xl items-start absolute bottom-0 sm:bottom-auto" x-cloak>
                <div
                    class="box-border flex flex-col w-full h-full overflow-hidden bg-white dark:bg-dark-1 border-border-1 dark:border-borderDark-1 border rounded-md shadow-md bg-opacity-90 drop-shadow-md ">
                    <div class="flex items-center px-3 border-b border-gray-300">
                        <svg class="w-4 h-4 mr-0 text-neutral-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" x2="16.65" y1="21" y2="16.65"></line>
                        </svg>
                        <input type="text" x-ref="commandInput" x-model="commandSearch"
                            class="flex w-full px-2 py-3 text-sm bg-transparent border-0 rounded-md outline-none focus:outline-none focus:ring-0 focus:border-0 placeholder:text-neutral-400 h-11 disabled:cursor-not-allowed disabled:opacity-50 text-gray-600 dark:text-accentDark-3"
                            placeholder="Type a command or search..." autocomplete="off" autocorrect="off"
                            spellcheck="false">
                    </div>
                    <div x-ref="commandItemsList" class="max-h-[320px] overflow-y-auto overflow-x-hidden">
                        <template x-for="(item, index) in commandItemsFiltered" :key="'item-' + index">

                            <div class="pb-1 space-y-1">
                                <template x-if="commandShowCategory(item, index)">
                                    <div class="px-1 overflow-hidden text-gray-700 ">
                                        <div class="px-2 py-1 my-1 text-xs font-medium text-neutral-500"
                                            x-text="commandCategoryCapitalize(item.category)"></div>
                                    </div>
                                </template>

                                <template x-if="(item.default && commandSearchIsEmpty()) || !commandSearchIsEmpty()">
                                    <div class="px-1 text-gray-600 dark:text-accentDark-3">
                                        <div :id="item.value + '-' + commandId" @click="commandItemSelected=item"
                                            @mousemove="commandItemActive=item"
                                            :class="{
                                                'bg-accent-600 dark:bg-accentDark-1 text-white': commandItemIsActive(
                                                    item)
                                            }"
                                            class=" relative flex cursor-default select-none items-center rounded-md px-2 py-1.5 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            <i :class="item.icon"></i>
                                            <span x-text="item.title"></span>
                                            <template x-if="item.right">
                                                <span class="ml-auto text-xs tracking-widest text-muted-foreground"
                                                    x-text="item.right"></span>
                                            </template>
                                        </div>
                                    </div>
                                </template>

                            </div>

                        </template>
                    </div>
                    <template x-if="commandItemsFiltered.length <= 0">
                        <div class="flex flex-col gap-4 items-center justify-center text-gray-600 dark:text-accentDark-3 py-10">
                            <i class="ti ti-database text-7xl"></i>
                            <h1>Tidak Ditemukan</h1>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </template>
</div>
