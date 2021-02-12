<template>
    <div id="decor" class=" px-24 mb-16">
        <h1 class="text-center my-4">High quality home decor</h1>
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue eu sagittis feugiat nunc sit est vitae eget. Nisl at sed ultrices pharetra massa consectetur lobortis velit fames. Iaculis arcu rhoncus tellus porta ornare nunc libero. Accumsan nisi, ullamcorper non venenatis egestas convallis sed dignissim massa.</p>
        <div class="images">
            <div>
                <div class="living">
                    <img src="../../assets/images/home/livingroom.png" >
                    <div class="livingroomtitle m">
                        <h2>Living Room</h2>
                        <svg class="ml-auto" width="96" height="8" viewBox="0 0 96 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M95.3536 4.35356C95.5488 4.1583 95.5488 3.84172 95.3536 3.64645L92.1716 0.464474C91.9763 0.269212 91.6597 0.269212 91.4645 0.464474C91.2692 0.659736 91.2692 0.976319 91.4645 1.17158L94.2929 4.00001L91.4645 6.82844C91.2692 7.0237 91.2692 7.34028 91.4645 7.53554C91.6597 7.7308 91.9763 7.7308 92.1716 7.53554L95.3536 4.35356ZM-4.37114e-08 4.5L95 4.50001L95 3.50001L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#780202"/>
                        </svg>
                    </div>
                </div>

                <div class="bedroom">
                    <img src="../../assets/images/home/bedroom.png" >
                    <div class="bedroomtitle mb-8">
                        <h2>Bedroom</h2>
                        <svg class="ml-auto" width="96" height="8" viewBox="0 0 96 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M95.3536 4.35356C95.5488 4.1583 95.5488 3.84172 95.3536 3.64645L92.1716 0.464474C91.9763 0.269212 91.6597 0.269212 91.4645 0.464474C91.2692 0.659736 91.2692 0.976319 91.4645 1.17158L94.2929 4.00001L91.4645 6.82844C91.2692 7.0237 91.2692 7.34028 91.4645 7.53554C91.6597 7.7308 91.9763 7.7308 92.1716 7.53554L95.3536 4.35356ZM-4.37114e-08 4.5L95 4.50001L95 3.50001L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#780202"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div>
                <div class="kitchen">
                    <img src="../../assets/images/home/kitchen.png" >
                    <div class="kitchenroomtitle mb-8">
                        <h2>Kitchen</h2>
                        <svg class="ml-auto" width="96" height="8" viewBox="0 0 96 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M95.3536 4.35356C95.5488 4.1583 95.5488 3.84172 95.3536 3.64645L92.1716 0.464474C91.9763 0.269212 91.6597 0.269212 91.4645 0.464474C91.2692 0.659736 91.2692 0.976319 91.4645 1.17158L94.2929 4.00001L91.4645 6.82844C91.2692 7.0237 91.2692 7.34028 91.4645 7.53554C91.6597 7.7308 91.9763 7.7308 92.1716 7.53554L95.3536 4.35356ZM-4.37114e-08 4.5L95 4.50001L95 3.50001L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#780202"/>
                        </svg>
                    </div>
                </div>
                <div class="bathroom">
                    <img src="../../assets/images/home/bathroom.png" >
                    <div class="bathroomtitle mb-8">
                        <h2>Bathroom</h2>
                        <svg class="ml-auto" width="96" height="8" viewBox="0 0 96 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M95.3536 4.35356C95.5488 4.1583 95.5488 3.84172 95.3536 3.64645L92.1716 0.464474C91.9763 0.269212 91.6597 0.269212 91.4645 0.464474C91.2692 0.659736 91.2692 0.976319 91.4645 1.17158L94.2929 4.00001L91.4645 6.82844C91.2692 7.0237 91.2692 7.34028 91.4645 7.53554C91.6597 7.7308 91.9763 7.7308 92.1716 7.53554L95.3536 4.35356ZM-4.37114e-08 4.5L95 4.50001L95 3.50001L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#780202"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div> 
    </div>      
</template>

<script>
export default {

}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
#decor>h1{
    max-width:1440px;
    font-size:36px;
    color:#780202;
    margin-top:60px;
    margin-bottom:30px;
}
.text{
    font-family: 'Roboto', sans-serif;
    font-size:14px;
    width: 774px;
    align-items: center;
    margin:0 auto;
}
.images{
   display: flex;
   justify-content: space-between;
   margin-top:40px;
   max-width:1440px;
   width: 100%; 
}
.livingroomtitle{
    width:200px;
    margin: 25px auto;
}
h2{
    line-height: 53px;
    font-size: 36px;
}
.kitchenroomtitle{
    width:150px;
    margin: 25px auto;
}
.bedroomtitle{
    width:175px;
    margin: 25px auto;
}
.bathroomtitle{
    width:188px;
    margin: 25px auto;
}
</style>