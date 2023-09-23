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
        ? 'inline-flex items-center pt-1 p-1.5 text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg'
        : 'inline-flex items-center pt-1 p-1.5 text-gray-500 focus:outline-nones transition-colors duration-200 rounded-lg'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
