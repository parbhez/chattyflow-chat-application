<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import AddForm from './Partial/AddForm.vue';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <div class="md:py-10">

            
            <div class=" mx-auto md:px-6 lg:px-8 mdmt-5">
                <div class=" md:border overflow-hidden sm:rounded-lg">
                    <div class="md:p-6 text-gray-900">
                        
                        <AddForm class="max-w-xl" />


                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

