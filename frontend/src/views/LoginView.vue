<script>
import axios from "axios";
import router from "@/router";

export default {
  name: "LoginView",
  data() {
    return {
      login: '',
      password: '',
      loginError: '',
      passwordError: ''
    }
  },
  methods: {
    onLogin() {
      this.loginError = ''
      this.passwordError = ''

      if (this.login.trim().length === 0) {
        this.loginError = 'Пожалуйста заполните Логин'
      }

      if (this.password.trim().length === 0) {
        this.passwordError = 'Пожалуйста заполните Пароль'
      }

      if (!this.loginError && !this.passwordError) {
        axios.post('http://localhost/api/login', {email: this.login, password: this.password})
            .then((response) => {
                localStorage.setItem('user', response.data.token)
                this.$store.commit('setToken', response.data.token)
                router.push({name: 'home'})
            })
            .catch((errors) => this.loginError = errors.response.data.message)
      }
    }
  }
}
</script>

<template>
  <section class="login-form">
    <h1 class="mb-4">Авторизация</h1>

    <form @submit.prevent="onLogin" method="post">
      <div class="form-group mb-3">
        <label>Логин</label>
        <input type="text" name="login" class="form-control" v-model="login">
        <div class="errors">{{ loginError }}</div>
      </div>
      <div class="form-group mb-3">
        <label>Пароль</label>
        <input type="password" name="password" class="form-control" v-model="password">
        <div class="errors">{{ passwordError }}</div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-warning w-100">Войти</button>
      </div>
    </form>
  </section>
</template>

<style>
  body {
    background-color: #f1f1f1;
  }

  .errors {
    font-size: 12px;
    color: red;
  }

  .login-form {
    width: 400px;
    background-color: #fff;
    padding: 25px;
    margin: 15px auto;
  }


</style>
