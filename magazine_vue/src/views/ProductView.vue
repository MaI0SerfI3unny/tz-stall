<template>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" :src="url_app+product_info.photo_url">
            <h2 class="mt-2">{{ product_info.name }}</h2>
        </div>
        <div class="col-md-6">
            <p>{{ product_info.description }}</p>
            <p class="price">{{ product_info.price }} UAH</p>
            <button class="btn btn-success">Купити</button>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
        product_info: {},
        url_app: process.env.VITE_BASE_URL,
        id: this.$route.params.id,
    };
  },
  async mounted() {
    const {data} = await axios.get(`${this.url_app}/api/products/${this.id}`)
    this.product_info = data
  },
};
</script>
