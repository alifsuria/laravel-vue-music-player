import { createRouter, createWebHistory } from 'vue-router'
import Welcome from '@/Pages/Welcome.vue'
import Authenticate from "@/middleware/Authenticate"
import RedirectIfAuthenticated from "@/middleware/RedirectIfAuthenticated"
import Guest from "@/middleware/Guest"
import Home from '@/Pages/Home.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'base',
      component: Home,
      meta:{
        Guest
      }
    },
    // {
    //   path: '/login',
    //   name: 'login',
    //   component: () => import("@/Pages/Auth/Login.vue"),
    //   meta:{
    //     RedirectIfAuthenticated
    //   }
    // },
    // {
    //   path: '/register',
    //   name: 'register',
    //   component: () => import("@/Pages/Auth/Register.vue"),
    //   meta:{
    //     RedirectIfAuthenticated
    //   }
    // },
    // {
    //   path: '/home',
    //   name: 'home',
    //   component: () => import("@/Pages/Home.vue"),
    //   meta:{
    //     Authenticate
    //   }
    // },
    {
      path: '/:pathMatch(.*)*',
      name: 'page-not-found',
      component: () => import("@/components/PageNotFound.vue")
    },
  ]
})


router.beforeEach(async (to, from, next) => {
  const guards: {} | any = to.meta;
  for (const i in guards) {
    if (Object.prototype.hasOwnProperty.call(guards, i)) {
      const g = guards[i];
      if (typeof g == "function") {
        await g(
          to,
          from,
          next,
        );
      }
    }
  }
  next();
})

export default router
