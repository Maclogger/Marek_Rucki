<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

defineProps<{
    text: string;
    bgColor?: string;
    href: string; // URL adresa vygenerovaná Laravel routou
}>();
</script>

<template>
    <Link
        :href="href"
        :class="[bgColor ?? 'bg-red-500']"
        class="aspect-square text-white rounded-2xl h-full mx-4 sm:text-4xl text-3xl px-4
               hover_effect flex items-center justify-center no-underline
               hover:bg-white hover:text-red-500 transition-all duration-300"
    >
        {{ text }}
    </Link>
</template>

<style scoped>
</style>
