<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/Breeze/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';

import {BugAntIcon} from '@heroicons/vue/24/solid'
import {StarIcon} from '@heroicons/vue/24/solid'
import {User} from "@/types";
import {ref, onMounted, onUnmounted} from "vue";

defineProps<{
    users: User[]
}>();

const activeUsers = ref<Set<number>>(new Set());

onMounted(() => {
    console.log("Spustila sa onMounted")
    window.Echo.join("users.status")
        .here((users: User[]) => {
            console.log("here");
            users.forEach((user) => activeUsers.value.add(user.id));
        })
        .joining((user: User) => {
            console.log("Pridava sa uzivatel: " + user.id);
            activeUsers.value.add(user.id);
        })
        .leaving((user: User) => {
            console.log("Odchadza uzivatel: " + user.id);
            activeUsers.value.delete(user.id);
        });
})

onUnmounted(() => {
    window.Echo.leave("users.status");
    console.log("Odchádzam ja.");
})

const isUserActive = (userId: number) => activeUsers.value.has(userId);

</script>


<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-6">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5 px-5 mx-6 rounded-lg dark:bg-gray-800 mb-5" v-for="user in users" :key="user.id">
            <div class="flex rounded-md py-2 px-3 bg-pink-600">
                <StarIcon v-if="user.name.endsWith('a')" class="size-6 text-blue-500"/>
                <BugAntIcon v-else class="size-6 text-blue-500"/>
                <h1 class=" text-white mx-2">Meno: {{ user.name }}</h1>
            </div>

            <h1 class="text-white mt-3 rounded-md py-2 px-3 bg-blue-600">Prihlásený: {{ isUserActive(user.id) ? "ÁNO" : "NIE" }} </h1>
        </div>
        <p class="text-white">{{ activeUsers.size }}</p>
    </AuthenticatedLayout>
</template>


