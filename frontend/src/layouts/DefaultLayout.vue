<script>

import Header from "@/components/App/Header.vue";
import Footer from "@/components/App/Footer.vue";
import Slider from "@/components/App/Slider.vue";

export default {
  name: "DefaultLayout",
  components: {Slider, Footer, Header}
}
</script>

<template>

  <section class="wrapper">
    <Header />

    <main>
      <slider></slider>
      <section class="container">
        <slot />
      </section>
    </main>
  </section>

  <Footer />
</template>

<style scoped>

</style>