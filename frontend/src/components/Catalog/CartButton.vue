<script>
import axios from "axios";
import {mapActions, mapGetters} from "vuex";

export default {
    name: "CartButton",
    props: ['productId'],
    methods: {
        addToCart() {
            axios.post('http://localhost/api/cart', {productId: this.productId}, {
                headers: {
                    Authorization: 'Bearer ' + localStorage.getItem('user')
                }
            })
                .then((response) => {
                    this.$store.commit('addToCart', this.productId)
                })
        }
    },
    computed: {
        existProduct() {
            return this.$store.getters.getCart.items.find((item) => item.productId === this.productId) !== undefined
        }
    }
}
</script>

<template>
    <button
        type="button"
        class="btn btn-warning"
        @click="addToCart()"
        :disabled="existProduct" >
        Заказать
    </button>
</template>

<style scoped>

</style>
