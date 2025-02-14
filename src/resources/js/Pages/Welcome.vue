<script setup lang="ts">
import SquareButton from "@/Components/BasicComponents/SquareButton.vue";

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
    laravelVersion: string;
    phpVersion: string;
}>();

</script>

<template>
    <div class="bg-gray-800 h-screen flex flex-col items-center justify-center">
        <h1 class="text-5xl font-bold text-white ">Bc. Marek Rucki</h1>
        <div class="flex justify-center items-center sm:h-52 my-20">
            <SquareButton text="Login"/>
            <SquareButton text="Register"/>
        </div>
        <p class="text-white ">Laravel verzia: {{ laravelVersion }} | PHP Verzia: {{ phpVersion }}</p>
    </div>
</template>

<style scoped>
    .hover_effect {
        @apply hover:bg-white hover:text-red-500 transition-all duration-300;
    }
    * {
        @apply selection:bg-red-500 text-white;
    }
</style>
