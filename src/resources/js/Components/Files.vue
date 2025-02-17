<script setup lang="ts">

</script>

<template>
    <div class="bg-gray-700 rounded-md p-4">
        <h2 class="text-lg font-semibold text-white mb-2">Súbory</h2>
        <div class="flex items-center mb-2">
            <label for="search" class="text-white mr-2">Module</label>
            <div class="relative flex-grow">
                <input
                    type="text"
                    id="search"
                    placeholder="Hľadať"
                    class="bg-gray-600 text-white rounded-md p-2 w-full pl-10"
                />
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg
                        class="w-5 h-5 text-gray-400"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-6-6m2-6a7 7 0 10-14 0 7 7 0 0014 0z"
                        ></path>
                    </svg>
                </div>
            </div>
        </div>
        <ul>
            <li class="text-white py-2">
                SHPORD /shpord/server/translation/Shpord_WEB-Cust-cs.trs
            </li>
            <li class="text-white py-2">
                SHPORD /shpord/server/translation/Shpord_WEB-Cust-sk.trs
            </li>
        </ul>
    </div>
</template>


<style scoped>

</style>
