<script>
import CartItem from "@/components/Cart/CartItem.vue";

export default {
  name: "CartView",
  components: {CartItem},
  data() {
    return {
      items: [
        {},
        {},
        {}
      ]
    }
  }
}
</script>

<template>
  <h1>Корзина</h1>
  <cart-item :item="item" v-for="item in items" />

  <section class="text-end mt-4">
    <h4>На сумму: 15 000 000 ₽</h4>
    <button class="btn btn-warning">Оформить заказ</button>
  </section>
</template>

<style scoped>
  .btn-warning {
    font-size: 24px;
  }
</style>