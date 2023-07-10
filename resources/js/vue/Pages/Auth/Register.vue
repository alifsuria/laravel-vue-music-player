<template>
    <App>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>

                        <div class="card-body">
                            <form @submit.prevent="submitForm">
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            :class="`form-control ${error.name != null ? 'is-invalid' : ''}`" v-model="name"
                                            autocomplete="name" autofocus>

                                        <span class="invalid-feedback" role="alert" v-if="error.name != null">
                                            <strong>{{ error.name }}</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            :class="`form-control ${error.email != null ? 'is-invalid' : ''}`"
                                            v-model="email" autocomplete="email">

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
                                            v-model="password" autocomplete="new-password">

                                        <span class="invalid-feedback" role="alert" v-if="error.password != null">
                                            <strong>{{ error.password }}</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">
                                        Confirm Password
                                    </label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            autocomplete="new-password" v-model="password_confirmation">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
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
const name = ref("");
const email = ref("");
const password = ref("");
const password_confirmation = ref("");
let error: Ref<{ [key: string]: string }> = ref({});


const submitForm = async () => {
    if (await authStore.register({
        name,
        email,
        password,
        password_confirmation,
        error,
    })){
        if(await authStore.login({email,password,error})){
            router.replace({name:"home"})
        }
    }

}
</script>