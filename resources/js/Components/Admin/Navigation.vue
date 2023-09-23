<template>


    <div class="flex">
        <aside>
            <div class="flex bg-primary">
                <div
                    :class="{' w-10': isSidebarHidden, 'w-60': !isSidebarHidden, 'overflow-x-hidden transition-all duration-300   h-screen': true }">
                    <ul class="space-y-2 font-medium">


                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg  group">
                               <div class="ml-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 "
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 18 18">
                                        <path
                                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                    </svg>
                               </div>
                                <span class="flex-1 ml-4 whitespace-nowrap">Home</span>
                                <span
                                    class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                            </a>
                        </li>

                    </ul>


                </div>
                <button @click="toggleSidebar">

                    <svg v-if="isSidebarHidden" class="w-6 h-6 text-gray-800 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                    </svg>

                    <svg v-else class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                    </svg>

                </button>
            </div>
        </aside>

        <div class="flex-grow transition-all duration-300"
            :style="{ 'margin-left': isSidebarHidden ? '10px' : '60px' }">
            <!-- Dashboard content... -->
            <main>
                <slot />
            </main>
        </div>


    </div>

</template>




<script>
    export default {
        data() {
            return {
                isSidebarHidden: localStorage.getItem('isSidebarHidden') === 'true' || false,
                isRightContentHidden: localStorage.getItem('isRightContentHidden') === 'true' || false,
            };
        },
        methods: {
            toggleSidebar() {
                this.isSidebarHidden = !this.isSidebarHidden;
                localStorage.setItem('isSidebarHidden', this.isSidebarHidden);
            },
            toggleRightContent() {
                this.isRightContentHidden = !this.isRightContentHidden;
                localStorage.setItem('isRightContentHidden', this.isRightContentHidden);
            },
        },
    };

</script>