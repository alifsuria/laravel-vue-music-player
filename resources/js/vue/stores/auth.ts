import { setFormError } from '@/helpers';
import axios from 'axios';
import { defineStore } from "pinia";

export const useAuthStore = defineStore("auth", {
    state: () => ({
        user: null as { [key: string]: any } || null
    }),
    actions: {
        async register(data: { [key: string]: any }): Promise<boolean> {
            const { name, email, password, password_confirmation, error } = data;

            error.value = {};

            const response = await axios.post("register", {
                name: name.value,
                email: email.value,
                password: password.value,
                password_confirmation: password_confirmation.value
            })

            switch (response.status) {
                case 200:

                    return true;
                case 422:
                    error.value = setFormError(response);

                    return false;
                default:
                    return false;

            }

        },
        async login(data: { [key: string]: any }): Promise<boolean> {
            const { email, password, error } = data;

            error.value = {};

            const response = await axios.post("login", {
                email: email.value,
                password: password.value,
            })

            switch (response.status) {
                case 200:
                    const { data } = response.data;
                    this.user = data.user

                    return true;
                case 422:
                    error.value = setFormError(response);

                    return false;
                case 401:
                    const { message } = response.data;

                    error.value = {
                        email: message
                    }

                    return false;
                default:
                    return false;
            }

        },
        async getUser() {
            const response = await axios.get("get-user");

            switch (response.status) {
                case 200:
                    const { data } = response.data;
                    this.user = data.user

                    return true;
                default:
                    return false;

            }
        },

        async logout() {
            const response = await axios.get("logout");

            switch (response.status) {
                case 200:

                    this.user = null;
                    return true;
                default:
                    return false;
            }
        },
    }
});