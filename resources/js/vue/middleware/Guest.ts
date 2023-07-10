import { RouteLocationNormalized, NavigationGuardNext } from "vue-router";
import { useAuthStore } from "@/stores/auth"; 

const Guest = async (to: RouteLocationNormalized, from: RouteLocationNormalized, next: NavigationGuardNext) => {
    const authStore = useAuthStore();
    authStore.getUser();
}

export default Guest 