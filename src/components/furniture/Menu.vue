<template >
      <div class="px-24 menu" v-if="categories.length">

        <div v-for="category in categories" :key="category.id" class="category dropdown">
          <h1 @click="$store.commit('updatecatID',category.id)" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>{{ category.name }}</span>
            <svg class="mt-auto" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 8L11.1962 0.5H0.803848L6 8Z" fill="black"/>
            </svg>
          </h1>
          <div class="sections dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div v-if="sections.length">
                <div v-for="section in sections" :key="section.id">
                  <p class="section pl-4 pb-2"  @click="$store.commit('updatesecID',section.id)">{{ section.name }}</p> 
                </div>
            </div>
            <div v-else>
               <p class="empty p-2">There aren't sections for {{ category.name }}</p>
            </div>
          </div>
        </div>
        
      </div>
</template>

<script>
import { ref, computed } from 'vue'
import { useStore } from 'vuex'
export default {
setup(){
  const store      =  useStore();
  store.dispatch('getCategories');
  store.dispatch('getSections');
  const categories = computed(()=>{
      return store.getters.getCategories;
  });
  const sections = computed(()=>{
      return store.getters.getSections;
  });
  // console.log(sections)
  return{categories,sections}
}
}
</script>

<style scoped>
.menu{
  display: flex;
  justify-content: space-between;
}
h1{
  cursor: pointer;
  display:flex;
  justify-content: space-between;
  width:220px;
  padding-bottom: 10px;
  border-bottom:solid #780202;
}
h1>span{
  font-size:20px;
}
.section{
  cursor: pointer;
  font-size:18px;
  color:#fff;
}
.section:hover{
  background-color: #680202;
}
.sections{
  width:220px;
  background-color: #780202;
}
.empty{
  font-size:18px;
  color:#fff;
}
</style>