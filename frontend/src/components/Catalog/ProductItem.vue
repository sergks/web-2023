<script>

  import CartButton from "@/components/Catalog/CartButton.vue";

  export default {
    name: "ProductItem",
    components: {CartButton},
    props: {
      product: {
        id: Number,
        name: String,
        price: Number
      }
    },
    methods: {
      addToCart() {
        this.$store.commit('addToCart', this.product)
      }
    }
  }

</script>

<template>
  <section class="col-md-6 col-lg-3 mb-4">
    <div class="card-product">
      <img src="https://kolesa-uploads.ru/-/2407c90e-938e-408d-9a53-515e9746bf94/audi-a6-50-tdi-quattro-s-line-2.jpg.webp">
      <div class="caption">
        <h2>
          <router-link :to="{name: 'productView', params: {id: product.id}}">
            {{ product.name }}
          </router-link>
        </h2>
        <div>Цена: {{ product.price }}</div>
        <div class="mt-4">
          <cart-button class="w-100" :productId="product.id" />
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>

</style>