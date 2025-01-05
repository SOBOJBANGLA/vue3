<script setup>
import { RouterLink, RouterView } from 'vue-router'

</script>

<template>

  
  <header>
   

    <div class="wrapper">
   

      <nav>
        <RouterLink to="/">Home</RouterLink>||
        <RouterLink to="/food">Food Items</RouterLink>||
        <RouterLink to="/fruit">Fruit Items</RouterLink>||
        <RouterLink to="/todo">Todo List</RouterLink>||
        <RouterLink to="/ref">Ref Hook</RouterLink>||
        <RouterLink to="/lifecycle">LifeCycle Hook</RouterLink>||
        <RouterLink to="/form">Form Inputs</RouterLink>
      </nav>
    </div>
  </header>

  <RouterView />
</template>

<style scoped>
 #app > div {
        border: dashed black 1px;
        display: inline-block;
        margin: 10px;
        padding: 10px;
        background-color: lightgreen;
    }
    #app > div:hover {
  cursor: pointer;
}
</style>
