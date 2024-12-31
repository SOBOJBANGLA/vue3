<template>

  <NewYear/>
  <FruitItemVue/>
</template>

<script>
import NewYear from './components/NewYear.vue'
import FruitItemVue from './components/FruitItem.vue'



export default {
  name: 'App',
  components: {
    
    NewYear,FruitItemVue
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
