<template>
   <div class="background">
     <div class="txt">
        <h1>Create your comfort zone.</h1>
        <button>Shop now</button>
        <svg class="slage" width="8" height="45" viewBox="0 0 8 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.64644 44.3536C3.84171 44.5488 4.15829 44.5488 4.35355 44.3536L7.53553 41.1716C7.73079 40.9763 7.73079 40.6597 7.53553 40.4645C7.34027 40.2692 7.02369 40.2692 6.82843 40.4645L4 43.2929L1.17157 40.4645C0.976309 40.2692 0.659727 40.2692 0.464464 40.4645C0.269202 40.6597 0.269202 40.9763 0.464464 41.1716L3.64644 44.3536ZM3.5 -2.18557e-08L3.5 44L4.5 44L4.5 2.18557e-08L3.5 -2.18557e-08Z" fill="#780202"/>
        </svg>
     </div>
   </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.background{
    background-image: url("../../assets/images/home/Rectangle 1.png");
    background-repeat: no-repeat;
    width: 100%;
    max-width: 1440px;
    height: 868px;
    position: relative;
}
.background>.txt{
    text-align: center;
    position: absolute;
    top:30%;
    left:26%;
}
.txt>h1{
    text-align: center;
    font-size: 64px;
    color:#780202;
}
.txt>button{
    margin-top:30px;
    margin-bottom:20px;
    width: 200px;
    padding: 12px 0;
    font-size: 18px;
    background-color: #fff;
    color: #000;
    text-align: center;
}
.slage{
    margin: 0 auto;
}
</style>