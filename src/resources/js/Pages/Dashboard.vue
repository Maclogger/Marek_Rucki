<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/Breeze/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';

import {BugAntIcon} from '@heroicons/vue/24/solid'
import {StarIcon} from '@heroicons/vue/24/solid'
import {User} from "@/types";
import {ref, onMounted, onUnmounted} from "vue";
import NavLink from "@/Components/Breeze/NavLink.vue";
import SquareButton from "@/Components/BasicComponents/SquareButton.vue";

defineProps<{
    users: User[]
}>();

const idsOfActiveUsers = ref<Set<number>>(new Set());

onMounted(() => {
    window.Echo.join("users.status")
        .here((users: User[]) => {
            users.forEach((user) => idsOfActiveUsers.value.add(user.id));
        })
        .joining((user: User) => {
            idsOfActiveUsers.value.add(user.id);
        })
        .leaving((user: User) => {
            idsOfActiveUsers.value.delete(user.id);
        });
})

onUnmounted(() => {
    window.Echo.leave("users.status");
    console.log("Odchádzam ja.");
})

const isUserActive = (userId: number) => idsOfActiveUsers.value.has(userId);

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

        <div class="w-36 ml-3 mb-3">
            <SquareButton text="Spedos" href="spedos"/>
        </div>

        <div class="py-5 px-5 mx-6 rounded-lg dark:bg-gray-800 mb-5" v-for="user in users" :key="user.id">a
            <div class="flex rounded-md py-2 px-3 bg-pink-600">
                <StarIcon v-if="user.name.endsWith('a')" class="size-6 text-blue-500"/>
                <BugAntIcon v-else class="size-6 text-blue-500"/>
                <h1 class=" text-white mx-2">Meno: {{ user.name }}</h1>
            </div>

            <h1 class="text-white mt-3 rounded-md py-2 px-3 bg-blue-600">Prihlásený: {{ isUserActive(user.id) ? "ÁNO" : "NIE" }} </h1>
        </div>
    </AuthenticatedLayout>
</template>


