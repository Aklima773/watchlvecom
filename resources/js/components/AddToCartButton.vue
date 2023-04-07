<template lang="">
    <div>
        <a href="" @click.prevent="addToCart" ><i class="icon-shopping-cart2"></i>Add To Cart</a>
    </div>
</template>
<script>
export default {
name: "AddToCartButton",

props:{
    product:{
        required:true,
        type:Object
    }
},

methods:{
    async addToCart(){
        // alert(this.product.id)
        //alert('Product Added in Basket');
        // return
        let response = await axios.post('/cart',{'product_id': this.product.id });

         this.$root.$emit('changeBasketCount', response.data.basket_count)

        //console.log(response.data);
    }
}
}
</script>
<style lang="">

</style>
