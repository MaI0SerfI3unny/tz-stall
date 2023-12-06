<template>
  <main>
    <div class="container">
      <div class="mb-4">
        <p>Фільтрувати по: 
          <select v-model="selectedOption" @change="handleSelectChange">
            <option 
            v-for="(item, index) in filter" 
            :key="index"
            :value="item.name">
              {{item.name}}
            </option>
          </select>
        </p>
      </div>
      <div class="row">
        <ProductItemVue 
          v-for="(item, index) in products" 
          :key="index"
          :item="item"/>
      </div>
    </div>
  </main>
</template>

<script>
import axios from 'axios';
import ProductItemVue from '../components/ProductItem.vue';
import json_filter from "../json_data/filter_select.json"

export default {
  components: {
    ProductItemVue,
  },
  data() {
    return {
      products: [],
      filter: [],
      selectedOption:"-",
      url_app: process.env.VITE_BASE_URL
    };
  },
  async mounted() {
    this.filter = json_filter
    const {data} = await axios.get(`${this.url_app}/api/products`)
    this.products = data
  },
  methods: {
    async handleSelectChange() {
      const findFilterValue = this.filter.filter((el) => el.name === this.selectedOption)
      const {data} = await axios.get(`${this.url_app}/api/products?sort_by=${findFilterValue[0].sort_by}&sort_order=${findFilterValue[0].type_sort_order}`)
      this.products = data   
    }
  }
};
</script>
