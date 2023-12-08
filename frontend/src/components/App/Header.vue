<script>
import Cart from "@/components/Cart/Cart.vue";

export default {
  name: "Header",
  components: {Cart},
  computed: {
      isAuth() {
          return this.$store.getters.isAuth
      }
  }
}
</script>

<template>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="https://yastatic.net/market-export/_/i/favicon/ymnew/558.png" class="logo">
          <span class="company">Market</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <router-link class="nav-link" to="/">Главная</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/catalog">Каталог</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/about">О нас</router-link>
            </li>
            <li class="nav-item" v-if="!isAuth">
              <router-link class="nav-link" to="/login">Войти</router-link>
            </li>
              <li class="nav-item" v-else>
                  <router-link class="nav-link" to="/logout">Выйти</router-link>
              </li>
          </ul>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <Cart />
          </li>
        </ul>
      </div>
    </nav>
  </header>
</template>

<style scoped>

</style>
