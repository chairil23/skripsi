import Vue from 'vue'
import VueRouter from 'vue-router'

import Main from '../components/view/Main.vue'
import Login from '../components/view/auth/Login.vue'
import Checkout from '../components/view/page/Checkout.vue'
import ProductDetail from '../components/view/page/ProductDetail.vue'
import Cart from '../components/view/page/Cart.vue'
import ProductIndex from '../components/view/partial/ProductIndex.vue'
import Contents from '../components/view/partial/Contents.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/', 
            components:{
                default: Main,
                main: Contents
            }
        },
        {path: '/subcategory/:id',component: ProductIndex},
        {path: '/login', component: Login},
        {path: '/checkout', component: Checkout},
        {path: '/product/:id', component: ProductDetail},
        {path: '/cart', component: Cart}
    ]
});

export default router