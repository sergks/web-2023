<template>
  <component :is="layout">
    <router-view/>
  </component>

</template>

<style>
  @import "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css";
</style>

<script>
import Header from "@/components/App/Header.vue";
import Footer from "@/components/App/Footer.vue";
import DefaultLayout from "@/layouts/DefaultLayout.vue";

export default {
  components: {Footer, Header},
  computed: {
    layout() {
      return this.$route.meta.layout || DefaultLayout
    }
  }
}

</script>

<style>
  .card {
    border: none;
  }
</style>