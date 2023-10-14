<script>
export default {
  name: "Cart"
}
</script>

<template>
  <a class="nav-link" href="#">
    <span class="cart-container">
      <img class="cart" src="img/cart.svg" />
      <span class="badge bg-danger" v-if="this.$store.getters.getCartCount > 0">
        {{ this.$store.getters.getCartCount }}
      </span>
    </span>
  </a>
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