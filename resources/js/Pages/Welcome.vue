<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {useForm} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";


</script>

<template>
    <GuestLayout>
        <Head title="Welcome" />
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="w-full h-screen flex justify-center items-center">
                <form @submit.prevent="submit">
                    <PrimaryButton class="text-5xl">
                        Checkout
                    </PrimaryButton>
                </form>
            </div>
        </div>
    </GuestLayout>

</template>
