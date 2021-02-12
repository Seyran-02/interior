<template>
  <div class="home">
    <HeaderHome />
    <DecorHome />
    <TitleSellers />
    <Products/>
  </div>
</template>

<script>
import HeaderHome from '../components/home/HeaderHome.vue'
import DecorHome from '../components/home/DecorHome.vue'
import TitleSellers from '../components/home/TitleSellers.vue'
import Products from '../components/home/Products.vue'
export default {
  components:{HeaderHome, DecorHome, TitleSellers, Products}
}
</script>

