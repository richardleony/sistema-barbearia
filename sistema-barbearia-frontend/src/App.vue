<template>
  <main>
    <img alt="Vue logo" class="logo" src="./assets/logo.svg" height="125" />
    <HelloWorld msg="You did it!" />
    <ServicosList />
  </main>
</template>

<script setup>
import HelloWorld from './components/HelloWorld.vue';
import ServicosList from './components/ServicosList.vue';
</script>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
