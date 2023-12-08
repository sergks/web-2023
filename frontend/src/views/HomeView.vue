<template>
  <section class="list-products row mt-4">
    <ProductItem v-for="item in items" :product="item" />
  </section>
</template>

<script>

import ProductItem from "@/components/Catalog/ProductItem.vue";
import Slider from "@/components/App/Slider.vue";
import axios from "axios";

export default {
  name: 'HomeView',
  components: {Slider, ProductItem},
  data() {
    return {
      items: []
    }
  },
  created() {
      axios.get('http://localhost/api/products/top', {
          headers: {
              Authorization: 'Bearer ' + localStorage.getItem('user')
          }
      })
          .then((response) => this.items = response.data)
  }
}
</script>
