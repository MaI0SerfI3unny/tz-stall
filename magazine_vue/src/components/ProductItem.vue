<template>
    <div class="col-md-3 mb-4 product_item">
        <RouterLink :to="{ 
            name: 'product', 
            params: { id: item.id } }">
            <div>
                <img class="img-fluid" :src="url_app+item.photo_url">
            </div>
            <div class="description_item_product mt-3">
                <div class="hover_container_item_product">
                <h4>{{  item.name.length > 19 ? item.name.slice(0,19)+"..." : item.name}}</h4>
                </div>
                <p class="price">{{item.price}} UAH</p>
            </div>
            <button class="btn btn-success">Купити</button>
        </RouterLink>
    </div>
</template>

<script>
import { RouterLink } from 'vue-router'

export default {
    props: {
        item: Object
    },
    data() {
        return {
            url_app: process.env.VITE_BASE_URL
        };
  },
};
</script>
