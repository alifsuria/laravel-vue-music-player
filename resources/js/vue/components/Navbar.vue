<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <RouterLink class="navbar-brand" :to="{ name: 'base' }">
                {{ appName }}
            </RouterLink>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    <template v-if="authStore.user == null">
                        <li class="nav-item">
                            <RouterLink class="nav-link" :to="{ name: 'login' }">Login</RouterLink>
                        </li>
                        <li class="nav-item">
                            <RouterLink class="nav-link" :to="{ name: 'register' }">Register</RouterLink>
                        </li>
                    </template>
                    <template v-else>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ authStore.user.name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)" @click.prevent="logout">
                                    Logout
                                </a>
                            </div>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup lang="ts">
import { RouterLink, useRouter } from 'vue-router';
import { useAuthStore } from '@/stores/auth';

const router = useRouter();
const authStore = useAuthStore();
let appName = null;

if (document.querySelector('meta[name="app-name"]')) {
    const val = document.querySelector('meta[name="app-name"]').getAttribute("content");

    if (val.trim().length > 0) {
        appName = val;
    }
}

const logout = async () => {
    if (await authStore.logout()) {
        router.replace({ name: "base" })
    }
}

</script>

<style scoped></style>