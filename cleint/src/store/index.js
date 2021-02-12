import { createStore } from 'vuex'
import axios from 'axios'

export default createStore({
  state: {
    basket:[],
    products:[],
    categories:[],
    sections:[],
    catID:0,
    secId:0
  },
  mutations: {
    updateProducts(state,data){
      state.products = data;
      // console.log(state.products);
    },
    updateCategories(state,data){
      state.categories = data;
      // console.log(state.categories);
    },
    updateSections(state,data){
      state.sections = data;
      // console.log(state.categories);
    },
    updatecatID(state,data){
      state.catID = data;
      // console.log(state.catID);
    },
    updatesecID(state,data){
      state.secID = data;
      // console.log(state.catID);
    },
    updateBasket(state,data){
      state.basket.push(data);
      window.localStorage.setItem('basket1', JSON.stringify(state.basket));
    },
    setBasketStorage(state){
      state.basket = JSON.parse(window.localStorage.getItem('basket1'));
    }
  },
  actions: {
    async getProducts({commit}){
      return await axios.get('http://localhost/interior/products.php')
         .then(
            res => {
              return  commit('updateProducts',res.data)
            }
         ).catch(
            err => {
              console.log(err)
            }
         )
    },
    async getCategories({commit}){
      return await axios.get('http://localhost/interior/categories.php')
         .then(
            res => {
              commit('updateCategories',res.data)
            }
         ).catch(
            err => {
              console.log(err)
            }
         )
    },
    async getSections({commit}){
      return await axios.get('http://localhost/interior/sections.php')
         .then(
            res => {
              commit('updateSections',res.data)
            }
         ).catch(
            err => {
              console.log(err)
            }
         )
    },
  },
  getters:{
    getBasket:(state)=>{
      return state.basket;
    },
    getProducts:(state)=>{
      if(state.secID){
        return state.products.filter((val)=>val.sec_id==state.secID);
      }
      return state.products;
    },
    getCategories:(state)=>{
      return state.categories;
    },
    getSections:(state)=>{
      if(state.catID){
        return state.sections.filter((val)=>val.cat_id==state.catID);
      }
        return state.sections;
    },
  },
  modules: {
  }
})
