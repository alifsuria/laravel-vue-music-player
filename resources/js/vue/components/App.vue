<template>
    <Navbar />
    <main class="py-4">
        <slot/>
    </main>
</template>

<script setup lang="ts">
import Navbar from "@/components/Navbar.vue"
</script>

<style scoped></style>