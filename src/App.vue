<template>
<div class="app">
  <Header/>
  <router-view/>
  <Footer/>
</div>
</template>
<script>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import {useStore} from 'vuex'
export default {
    components: {Header,Footer},
    setup(){
      const store = useStore();
      if(window.localStorage.basket1){
         store.commit('setBasketStorage')
      }
    }
}
</script>
<style>
.app{
  width:100%;
  max-width:1440px;
  margin:0 auto;
}
</style>
