<template>
  <div class="px-24 seeMoreBox">
        <div class="see" @click="$emit('seeMore')">
            <p>see more</p>
            <svg width="100" height="8" viewBox="0 0 100 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M99.3536 4.35354C99.5488 4.15828 99.5488 3.8417 99.3536 3.64644L96.1716 0.464458C95.9763 0.269196 95.6597 0.269196 95.4645 0.464458C95.2692 0.65972 95.2692 0.976302 95.4645 1.17156L98.2929 3.99999L95.4645 6.82842C95.2692 7.02368 95.2692 7.34026 95.4645 7.53553C95.6597 7.73079 95.9763 7.73079 96.1716 7.53553L99.3536 4.35354ZM4.37114e-08 4.5L99 4.49999L99 3.49999L-4.37114e-08 3.5L4.37114e-08 4.5Z" fill="#780202"/>
            </svg>
        </div>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>
p{
  font-size: 24px;
}
.seeMoreBox{
 display: flex;
 flex-direction: row-reverse;
}
.see{
    cursor: pointer;
}
</style>