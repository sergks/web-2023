<script>
import ProductCard from "@/components/Catalog/ProductCard.vue";

export default {
  name: "ProductView",
  components: {ProductCard},
  data() {
    return {
      id: null
    }
  },
  created() {
    this.id = this.$route.params.id
  }
}
</script>

<template>
  <ProductCard />
</template>

<style scoped>

</style>