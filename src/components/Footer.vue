<template>
    <div id="footer" class="px-24 py-20 mt-20">
        <div class="menu">
            <p>About Us</p>
            <p>Student Discount</p>
            <p>Coupons</p>
        </div>
        <div>
            <p>Contact Us</p>
            <p>Customer Service</p>
        </div>
        <div>
            <p>FAQ</p>
            <p>Order Status</p>
        </div>
        <div>
            <p><a href="tel:+123456789">Call Us: +123 456789</a></p>
            <p>Hours: Monday-Friday 10:00-21:00</p>
        </div>
    </div>
</template>

<script>
export default {
   
}
</script>

<style scoped>
#footer{
    background: #EEEEEE;
    max-width:1440px;
    display:flex;
    justify-content: space-between;
}
p{
    font-size:18px;
    line-height: 21px;
}
</style>