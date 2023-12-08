import {createStore} from 'vuex'

export default createStore({
    state: {
        cart: {
            items: []
        },
        user: {
            token: null
        }
    },
    getters: {
        getCartCount(state) {
            return state.cart.items.length
        },
        isAuth(state) {
            return state.user.token !== null
        },
        // existProduct: (state) => (productId) => {
        //     return state.cart.items.find((item) => item.productId === productId) !== undefined
        // },
        getCart(state) {
            return state.cart
        }
    },
    mutations: {
        addToCart(state, product) {
            state.cart.items.push(product)
        },
        setToken(state, token) {
            state.user.token = token
        },
        initCart(state, cart) {
            state.cart = cart
        }
    },
    actions: {
    },
    modules: {}
})
