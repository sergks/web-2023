<script>
export default {
    name: "CartItem",
    props: ['item']
}
</script>

<template>
    <section class="card mb-2 p-3">
        <section class="row">
            <section class="col-md-2">
                <div class="d-flex">
                    <input type="checkbox" checked>
                    <img
                        src="https://kolesa-uploads.ru/-/2407c90e-938e-408d-9a53-515e9746bf94/audi-a6-50-tdi-quattro-s-line-2.jpg.webp"
                        class="img-fluid ms-4"/>
                </div>
            </section>

            <section class="col-md-10 text-end">
                <h4>{{ item.product.name }}</h4>
                <div>Цвет товара: серый</div>
                <div>Цена: {{ item.price }} ₽</div>
                <div>Количество: {{ item.count }}</div>
                <div>Итого: {{ item.total }} ₽</div>
            </section>

        </section>
    </section>
</template>

<style scoped>

</style>
