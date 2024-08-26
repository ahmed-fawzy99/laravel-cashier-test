<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/vue3';
import PrimaryButton from "@/Components/PrimaryButton.vue";



const submit = () => {
    form.get(route('stripe.checkout'), {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
                    <div class="w-full flex justify-center items-center">
                        <form @submit.prevent="submit">
                            <Link :href="route('stripe.checkout')" class="text-5xl">
                                Checkout
                            </Link>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
