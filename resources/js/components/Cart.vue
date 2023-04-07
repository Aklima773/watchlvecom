<template lang="">
   <section id="product-area">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart (Total Product: {{$basket_count}} )</h3>
                        <div>
                            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price
                                    <i class="fas fa-angle-down mt-1"></i></a></p>
                        </div>
                    </div>
                    <div class="card rounded-6 mb-6" v-for="(basket, index) in basketList" :key="basket.id">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img :src="'/front/images/'+basket.product.image_name"
                                        class="img-fluid rounded-3" alt="">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <lable style="font-size:20px; font-weight:700;color:Red;">Product Item</lable>
                                    <p class="lead fw-normal mb-2">{{basket.product.name}}({{basket.id}})</p>
                                    <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey
                                    </p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" :value="basket.qty" type="number"
                                        class="form-control form-control-sm" />

                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 ">
                                    <lable style="font-size:16px; font-weight:700;color:Red;">Product Price</lable>
                                    <h5 class="mb-0">${{basket.product.sale_price}}</h5>
                                </div>
                                <div class="col-md-4 col-lg-3 col-xl-3 ">
                                    <lable style="font-size:16px; font-weight:700;color:Red;">Product Total price</lable>
                                    <h5 class="mb-0">${{basket.qty * basket.product.sale_price}}</h5>
                                </div>
                                <div class="text-end" >
                                    <a href="#!" class="btn btn-danger">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body p-4 d-flex flex-row">
                            <div class="form-outline flex-fill">
                                <div class="d-flex justify-content-between" style="color:blue">
                             <p class="mb-2" style="font-size:25px; margin-right: 80px; font-weight:500">Subtotal</p>
                             <p class="mb-2" style="font-size:25px; font-weight:700">${{ subTotal }}</p>
                         </div>
                            </div>

                        </div>
                        <hr/>
                        <div class="card-body p-4 d-flex flex-row" style="font-size:22px; font-weight: 700; color:blue">
                            <div class="form-outline flex-fill">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2" style="font-size:25px; margin-right: 80px; font-weight:500">Estimated Shipping</p>
                             <p class="mb-2" style="font-size:25px; font-weight:700">$2.95</p>
                         </div>
                            </div>

                        </div>
                        <hr/>
                        <div class="card-body p-4 d-flex flex-row" style="font-size:22px; font-weight: 700; color:blue">
                            <div class="form-outline flex-fill">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2" style="font-size:25px; margin-right: 80px; font-weight:500">Total</p>
                             <p class="mb-2" style="font-size:25px; font-weight:700">${{total}}</p>
                         </div>
                            </div>

                        </div>
                        <hr/>

                    </div>


                    <!-- <div class="card mb-4">
                        <div class="card-body p-4 d-flex flex-row">
                            <div class="form-outline flex-fill">
                                <input type="text" id="form1" class="form-control form-control-lg" />
                                <label class="form-label" for="form1">Discound code</label>
                            </div>
                            <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
                        </div>
                    </div> -->

                    <div class="card">
                        <div class="card-body">
                            <a href="/checkout" class="btn btn-warning btn-block btn-lg">Proceed to Pay</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
name: "Cart",

props:{
    basketList:{
        required: true,
        type: Object
    }

},
computed:{

    subTotal(){


    let sum = 0

    for(let i=0; i < this.basketList.length; i++){
        sum += this.basketList[i].price;
    }
    return sum;
},


  total(){
    return this.subTotal + 2.95
  }
},


}
</script>
<style lang="">

</style>
