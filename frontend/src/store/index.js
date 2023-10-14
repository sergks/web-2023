import { createStore } from 'vuex'

export default createStore({
  state: {
    cart: {
      products: []
    }
  },
  getters: {
    getCartCount(state) {
      return state.cart.products.length
    }
  },
  mutations: {
    addToCart(state, product) {
      state.cart.products.push(product)
    }
  },
  actions: {
  },
  modules: {
  }
})
