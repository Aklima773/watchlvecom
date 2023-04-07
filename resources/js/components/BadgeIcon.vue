<template>

        <span class="badge badge-pill badge-warning align-top">{{basketCount}}</span>

</template>
<script>
export default {
name:"BadgeIcon",

props:{
    basketCount:{
        required:true,
    }
},
mounted(){
    this.$root.$on('changeBasketCount', (newBasketCount)=>{
         this.basketCount = newBasketCount
    });
}
}
</script>
<style>

</style>
