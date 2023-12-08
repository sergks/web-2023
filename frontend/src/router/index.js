import {createRouter, createWebHashHistory} from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ContactView from "@/views/ContactView.vue";
import CatalogView from "@/views/CatalogView.vue";
import ProductView from "@/views/ProductView.vue";
import LoginLayout from "@/layouts/LoginLayout.vue";
import AboutView from "@/views/AboutView.vue";
import LoginView from "@/views/LoginView.vue";
import CartView from "@/views/CartView.vue";
import LogoutView from "@/views/LogoutView.vue";

const routes = [
    {
        path: '/',
        name: 'home',
        component: HomeView
    },
    {
        path: '/contact',
        name: 'contact',
        component: ContactView
    },
    {
        path: '/catalog',
        name: 'catalog',
        component: CatalogView
    },
    {
        path: '/catalog/:id',
        name: 'productView',
        component: ProductView
    },
    {
        path: '/about',
        name: 'about',
        component: AboutView
    },
    {
        path: '/login',
        name: 'login',
        component: LoginView,
        meta: {
            layout: LoginLayout
        }
    },
    {
        path: '/logout',
        name: 'logout',
        component: LogoutView
    },
    {
        path: '/cart',
        name: 'cart',
        component: CartView
    },
]

const router = createRouter({
    history: createWebHashHistory(),
    routes
})

export default router
