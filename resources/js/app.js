//for version vue3

require('./bootstrap');

import { createApp } from 'vue';
import Hello from './components/Hello.vue';
import AddToCartButton from './components/AddToCartButton.vue';
import BadgeIcon from './components/BadgeIcon.vue';
import Cart from './components/Cart.vue';
import Checkout from './components/Checkout.vue'



//TODO MOved to other file




const app= createApp({});
app.component('hello', Hello);
app.component('add-to-cart', AddToCartButton);
app.component('badge-icon', BadgeIcon);
app.component('cart', Cart);
app.component('checkout', Checkout);

// app.filter('formatPrice', function(value){
//     return '$' . parseFloat(value).toFixed(2)
// });










app.mount("#app");
