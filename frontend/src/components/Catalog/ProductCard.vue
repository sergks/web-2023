<script>

  import CartButton from "@/components/Catalog/CartButton.vue";

  export default {
    name: "ProductCard",
    components: {CartButton}
  }

</script>

<template>
  <section class="row">

    <section class="col-md-6">
      <img src="https://kolesa-uploads.ru/-/2407c90e-938e-408d-9a53-515e9746bf94/audi-a6-50-tdi-quattro-s-line-2.jpg.webp" class="img-fluid" />
    </section>

    <section class="col-md-6">
      <section class="card p-4">
        <h1>Audi A6</h1>
        <p>Цвет товара: серый</p>

        <ul class="list-unstyled d-flex list-colors mb-4">
          <li class="active">Серый</li>
          <li>Мокрый асфальт</li>
          <li>Красный</li>
        </ul>

        <h4>Описание</h4>
        <p>
          тип: умный браслет, Совместимость с ОС: Android, iOS, пульсометр: встроенный, функции экрана:
          наличие экрана, постоянная работа экрана, сенсорный экран, Класс пыле-влагозащиты (IP): IP65
        </p>

        <p><h5>Цена: 10 000 000 ₽</h5></p>
        <p>
          <cart-button :productId="1" />
        </p>
      </section>
    </section>

  </section>
</template>

<style scoped>
  .list-colors li {
    margin-right: 10px;
    padding: 7px 12px;
    background-color: #fff;
    border: 2px solid #ddd;
    border-radius: 4px;
  }

  .list-colors li.active {
    border-color: #fce000;
  }
</style>