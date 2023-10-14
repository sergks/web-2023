<template>
  <section class="list-products row mt-4">
    <ProductItem v-for="item in items" :product="item" />
  </section>
</template>

<script>

import ProductItem from "@/components/Catalog/ProductItem.vue";
import Slider from "@/components/App/Slider.vue";

export default {
  name: 'HomeView',
  components: {Slider, ProductItem},
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
        }
      ]
    }
  }
}
</script>
