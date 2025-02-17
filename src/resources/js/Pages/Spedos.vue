<script setup lang="ts">

import Branches from "@/Components/Branches.vue";
import Logo from "@/Components/Logo.vue";
import Files from "@/Components/Files.vue";
import History from "@/Components/History.vue";
</script>

<template>
    <div class="bg-gray-800 w-screen h-screen flex flex-col items-center p-4">
        <div class="flex w-full max-w-5xl space-x-4">
            <div class="w-1/4">
                <Logo />
                <Branches />
            </div>
            <div class="w-1/2">
                <Files />
            </div>
            <div class="w-1/4">
                <History />
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
