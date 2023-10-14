<script>
import ProductItem from "@/components/Catalog/ProductItem.vue";

export default {
  name: "CatalogView",
  components: {ProductItem},
  data() {
    return {
      items: [
        {
          id: 1,
          name: 'Audi A7',
          price: 6000000
        },
        {
          id: 2,
          name: 'Audi A8',
          price: 8000500
        },
        {
          id: 1,
          name: 'Audi A7',
          price: 6000000
        },
        {
          id: 2,
          name: 'Audi A8',
          price: 8000500
        },
        {
          id: 1,
          name: 'Audi A7',
          price: 6000000
        },
        {
          id: 2,
          name: 'Audi A8',
          price: 8000500
        },
        {
          id: 1,
          name: 'Audi A7',
          price: 6000000
        },
        {
          id: 2,
          name: 'Audi A8',
          price: 8000500
        }
      ]
    }
  }
}
</script>

<template>
  <h1>Каталог товаров</h1>

  <section class="list-products row mt-4">
    <ProductItem v-for="item in items" :product="item" />
  </section>
</template>

<style scoped>

</style>