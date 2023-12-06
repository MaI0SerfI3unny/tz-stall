<template>
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <img class="logo" :src="logo">
        </div>
        <div class="col-md-10 justify-content-end">
          <div class="link_container">
            <RouterLink class="text-white" to="/">Home</RouterLink>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script setup>
import { RouterLink } from 'vue-router'
import logo from '@/assets/logo.png';
</script>