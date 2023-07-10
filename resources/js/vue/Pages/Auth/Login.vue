<template>
    <App>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form @submit.prevent="submitForm">
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            :class="`form-control ${error.email != null ? 'is-invalid' : ''}`"
                                            v-model="email" autocomplete="email" autofocus>

                                        <span class="invalid-feedback" role="alert" v-if="error.email != null">
                                            <strong>{{ error.email }}</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            :class="`form-control ${error.password != null ? 'is-invalid' : ''}`"
                                            v-model="password" autocomplete="current-password">

                                        <span class="invalid-feedback" role="alert" v-if="error.password != null">
                                            <strong>{{ error.password }}</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                            <label class="form-check-label" for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </App>
</template>

<script setup lang="ts">
import { useRouter } from 'vue-router';
import { ref } from 'vue';
import type { Ref } from 'vue';
import { useAuthStore } from '@/stores/auth';
import App from '@/components/App.vue';

const router = useRouter();
const authStore = useAuthStore();
const email = ref("");
const password = ref("");
const error: Ref<{ [key: string]: string }> = ref({});

const submitForm = async () => {
    if (await authStore.login({
        email,
        password,
        error,
    })) router.replace({name:"home"});
}
</script>

<style scoped></style>