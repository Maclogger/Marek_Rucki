<script setup lang="ts">
defineProps<{
    text: string;
    bgColor?: string;
    href: string;
}>();
</script>

<template>
    <a
        :href="href"
        :class="[bgColor ?? 'bg-red-500']"
        class="aspect-square text-white rounded-2xl h-full mx-4 sm:text-4xl text-3xl px-4 hover_effect flex items-center justify-center no-underline"
    >
        {{ text }}
    </a>
</template>

<style scoped>
a {
    text-decoration: none; /* Odstráni defaultné podčiarknutie odkazu */
}
</style>
