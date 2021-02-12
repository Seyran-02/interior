import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: () => import('../views/Home.vue')
  }, 
  {
    path: '/furniture',
    name: 'Furniture',
    component: () => import('../views/Furniture.vue')
  }, 
  {
    path: '/lighting',
    name: 'Lighting',
    component: () => import('../views/Lighting.vue')
  }, 
  {
    path: '/decor',
    name: 'Decor',
    component: () => import('../views/Decor.vue')
  }, 
  {
    path: '/tablewear',
    name: 'Tablewear',
    component: () => import('../views/Tablewear.vue')
  }, 
  {
    path: '/basket',
    name: 'Basket',
    component: () => import('../views/Basket.vue')
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
