<script setup lang="ts">

defineProps<{
    text: string;
    bgColor?: string;
}>();

</script>

<template>
    <button
        v-text="text"
        :class="[
            bgColor ?? 'bg-red-500'
        ]"
        class="aspect-square block text-white  rounded-2xl h-full mx-4 sm:text-4xl text-3xl px-4 hover_effect"
    />
</template>

<style scoped>
</style>
