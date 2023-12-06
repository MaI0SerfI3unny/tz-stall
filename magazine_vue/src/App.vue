<script setup>
import { RouterView } from 'vue-router'
import logo from '@/assets/logo.png';
import Header from '@/components/Header.vue'
</script>

<template>
  <Header />
  <RouterView />
</template>

<style scoped>

nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
  margin-top: 2rem;
}

</style>
