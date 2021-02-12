<template>
  <div id="nav">
    <!-- <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> -->
    <nav class="navbar navbar-expand-lg px-24">
    <router-link to="/" class="navbar-brand">
      <img src="../assets/images/logo.png">
    </router-link>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active mx-6 my-auto">
        <router-link to="/furniture" class="nav-link">Furniture</router-link>
      </li>
      <li class="nav-item active mx-6 my-auto">
        <router-link to="/lighting" class="nav-link">Lighting</router-link>
      </li>
      <li class="nav-item active mx-6 my-auto">
        <router-link to="/decor" class="nav-link">Decor</router-link>
      </li>
      <li class="nav-item active mx-6 my-auto">
        <router-link to="/tablewear" class="nav-link">Tablewear</router-link>
      </li>
      <li class="nav-item active mx-6 my-auto">
        <router-link to="/basket" class="nav-link">
            <svg width="40" height="29" viewBox="0 0 40 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M37.3062 7.539H12.5706L7.75524 0H1.01376C0.45619 0 0 0.45234 0 1.0052C0 1.55806 0.45619 2.0104 1.01376 2.0104H6.64011L17.4873 19.0988L17.5887 19.2998C18.0956 20.104 19.0079 20.6066 19.971 20.6066H34.1129C35.228 20.6066 36.2418 19.9532 36.6473 18.8978L39.7899 11.2582C40.1448 10.4038 40.0434 9.44888 39.5365 8.69498C39.0803 7.99134 38.2186 7.539 37.3062 7.539ZM37.9652 10.5043L34.8225 18.1439C34.7212 18.3952 34.4677 18.5962 34.1636 18.5962H20.0217C19.7683 18.5962 19.5148 18.4454 19.3627 18.2444L13.8378 9.5494H37.3062C37.6611 9.5494 37.8131 9.75044 37.9145 9.85096C37.9652 9.95148 38.1172 10.2028 37.9652 10.5043Z" fill="black"/>
                <path d="M35.6842 25.5823C35.6842 23.6724 34.1129 22.1646 32.2374 22.1646C30.3113 22.1646 28.7906 23.7227 28.7906 25.5823C28.7906 27.4419 30.362 29 32.2374 29C34.1129 29 35.6842 27.4419 35.6842 25.5823ZM30.7675 25.5823C30.7675 24.7781 31.4264 24.175 32.1867 24.175C32.9977 24.175 33.606 24.8284 33.606 25.5823C33.606 26.3362 32.9977 26.9896 32.2374 26.9896C31.4264 26.9896 30.7675 26.3362 30.7675 25.5823Z" fill="black"/>
                <path d="M21.0861 22.1144C19.16 22.1144 17.6393 23.6724 17.6393 25.5321C17.6393 27.3917 19.2107 28.9497 21.0861 28.9497C23.0123 28.9497 24.5329 27.3917 24.5329 25.5321C24.5329 23.6724 22.9616 22.1144 21.0861 22.1144ZM21.0861 26.9896C20.2751 26.9896 19.6669 26.3362 19.6669 25.5823C19.6669 24.8284 20.3258 24.175 21.0861 24.175C21.8971 24.175 22.5054 24.8284 22.5054 25.5823C22.5054 26.3362 21.8464 26.9896 21.0861 26.9896Z" fill="black"/>
            </svg>
        </router-link>
      </li>
      <li class="nav-item active ml-6 my-auto">  
        <svg class="basket" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5947 5.4003C22.2426 9.04306 22.2546 14.9557 18.6238 18.6132L18.6042 18.633C14.9629 22.2798 9.05919 22.2851 5.41136 18.6424C1.76022 14.9964 1.75158 9.0763 5.39207 5.41959C9.03257 1.76288 14.9436 1.75425 18.5947 5.4003ZM19.5093 21.4033C14.802 25.1906 7.90308 24.9031 3.528 20.534C-1.16631 15.8463 -1.1774 8.23485 3.50322 3.53338C8.18388 -1.16808 15.7838 -1.1792 20.4781 3.50857C24.8531 7.87758 25.1604 14.7862 21.3926 19.5117L29 27.1084L27.1166 29L19.5093 21.4033Z" fill="black"/>
        </svg>
      </li>  
    </ul>
  </div>
</nav>
  </div>
  
</template>

<script>
export default {
 setup(){
    window.addEventListener("scroll", function(){
      let header = document.querySelector("#nav")
      header.classList.toggle("sticky",window.scrollY>0)
    });
 }
}
</script>

<style scoped>
.nav-item>a{
    font-size :24px;
}
.nav-item>a:hover{
    color:#780202 !important;
}
.router-link-active{
    color:#780202 !important;
}
#nav{
    background-color: rgb(0, 0, 0, 0);
}
#nav{
    z-index: 40;
    position: fixed;
    top:0;
    display:block;
    width: 100%;
    max-width: 1440px;
    background-color: rgb(0, 0, 0, 0);
}
.sticky{
  background-color: rgb(255, 255, 255) !important;
}
</style>