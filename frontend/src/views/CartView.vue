<script>
import CartItem from "@/components/Cart/CartItem.vue";
import axios from "axios";

export default {
  name: "CartView",
  components: {CartItem},
  data() {
    return {
      cart: {}
    }
  },
    created() {
        axios.get('http://localhost/api/cart', {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('user')
            }
        })
            .then((response) => this.cart = response.data)
    }
}
</script>

<template>
  <h1>Корзина</h1>
  <cart-item :item="item" v-for="item in cart.items" />

  <section class="text-end mt-4">
    <h4>На сумму: {{ cart.total }} ₽</h4>
    <button class="btn btn-warning">Оформить заказ</button>
  </section>
</template>

<style scoped>
  .btn-warning {
    font-size: 24px;
  }
</style>
