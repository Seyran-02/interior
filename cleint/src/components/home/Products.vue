<template>
    <div>
        <Sellers :quantity="product_quantity" />
        <SeeMore v-if="quantity>4 && product_quantity < quantity" @seeMore="see"/>
    </div>
</template>

<script>

import Sellers from './products/Sellers.vue'
import SeeMore from './products/SeeMore.vue'
import { useStore } from 'vuex'
import { computed, ref } from 'vue';
export default {
components:{Sellers, SeeMore},
setup(){
    const store    =  useStore();    
    const quantity = computed(()=>{
        return store.getters.getProducts.length;
    });
    const product_quantity = ref(4);
    const see = ()=>{
        product_quantity.value+=4;
    };
    return{quantity,see,product_quantity}
}
}
</script>

