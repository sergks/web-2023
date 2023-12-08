<script>
import ProductItem from "@/components/Catalog/ProductItem.vue";
import axios from "axios";

export default {
    name: "CatalogView",
    components: {ProductItem},
    data() {
        return {
            items: []
        }
    },
    created() {
        axios.get('http://localhost/api/products', {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('user')
            }
        })
            .then((response) => this.items = response.data)
    }
}
</script>

<template>
    <h1>Каталог товаров</h1>

    <section class="list-products row mt-4">
        <ProductItem v-for="item in items" :product="item"/>
    </section>
</template>

<style scoped>

</style>
