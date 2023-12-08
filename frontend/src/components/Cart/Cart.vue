<script>
import axios from "axios";

export default {
    name: "Cart",
    created() {
        axios.get('http://localhost/api/cart', {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('user')
            }
        })
            .then((response) => {
                this.$store.commit('initCart', response.data)
            })
    }
}
</script>

<template>
    <router-link class="nav-link" :to="{name: 'cart'}">
    <span class="cart-container">
      <img class="cart" src="img/cart.svg"/>
      <span class="badge bg-danger" v-if="this.$store.getters.getCartCount > 0">
        {{ this.$store.getters.getCartCount }}
      </span>
    </span>
    </router-link>
</template>

<style scoped>
.cart-container {
    position: relative;
}

.cart-container .badge {
    right: -8px;
    top: -7px;
    position: absolute;
    font-size: 8px;
}
</style>
