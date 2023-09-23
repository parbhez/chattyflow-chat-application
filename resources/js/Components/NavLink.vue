<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'text-white flex justify-center items-center w-full py-3 group relative hover:border-l-2 border-gray-800 bg-gradient-to-r from-[#F5F7FB] to-[#FEFEFE]'
        : 'text-white flex justify-center items-center w-full py-3 group relative hover:border-l-2 hover:bg-gradient-to-r from-[#F5F7FB] to-[#FEFEFE]'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
