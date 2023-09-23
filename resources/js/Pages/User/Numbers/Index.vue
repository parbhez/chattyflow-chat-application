<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <div class="md:py-10">

            
            <div class=" mx-auto md:px-6 lg:px-8 mdmt-5">
                <div class="block md:hidden">
                    <div class=" flex justify-between py-5 px-5 ">
                        <a href="" class=" border p-2 rounded-md">
                            <svg class="w-3 h-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
  </svg>
                        </a>
                        <h2 class=" font-semibold text-primary">Offers</h2>
                        <a href="" class="border p-2 rounded-md">
                            <svg class="w-3 h-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 4">
    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M2.49 2h.01m6 0h.01m5.99 0h.01"/>
  </svg>
                        </a>
                    </div>
                </div>


                <div class=" md:border overflow-hidden sm:rounded-lg">
                    <div class="md:p-6 text-gray-900">
                        

                        


                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

