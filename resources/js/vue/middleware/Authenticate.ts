import { RouteLocationNormalized, NavigationGuardNext } from "vue-router";
import { useAuthStore } from "@/stores/auth"; 

const Authenticate = async (to: RouteLocationNormalized, from: RouteLocationNormalized, next: NavigationGuardNext) => {
    const authStore = useAuthStore();
    const auth = await authStore.getUser();
    if(!auth) next({name:"login"});
}

export default Authenticate 