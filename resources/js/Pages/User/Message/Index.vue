<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import History from './Partials/History.vue'
import Message from './Partials/Message.vue'
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="">
            <div class=" ">
                <div class="flex">
                    <History />

                    <Message />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
