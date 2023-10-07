<template>
  <Header></Header>

  <main>
    <section class="container">
      <router-view/>
    </section>
  </main>

  <Footer></Footer>

</template>

<style>
  @import "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css";
</style>

<script>
import Header from "@/components/App/Header.vue";
import Footer from "@/components/App/Footer.vue";

export default {
  components: {Footer, Header}
}

</script>