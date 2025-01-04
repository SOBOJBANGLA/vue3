<script setup>




</script>

<template>
 
    <h1>Welcome Home</h1>
    <food-item food-name ="Pizza"/> 
    <food-item food-name ="Pizzaa" />
    <food-item />

    <hr>
    <product-item product-item="Shirt" product-desc="Shirt is red"  v-bind:is-favorite="true"/>
    <product-item product-item="Shirt" product-desc="Shirt is red"  v-bind:is-favorite="false"/>
    <product-item product-item="Shirt" product-desc="Shirt is red"  v-bind:is-favorite="false"/>
  
</template>

<style >
#app > div {
    border: dashed black 1px;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    background-color: lightgreen;
  }
</style>