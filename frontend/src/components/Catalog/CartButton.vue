<script>
export default {
  name: "CartButton",
  props: ['productId'],
  methods: {
    addToCart() {
      alert(this.productId)
    }
  }
}
</script>

<template>
  <button type="button" class="btn btn-warning" @click="addToCart()">Заказать</button>
</template>

<style scoped>

</style>