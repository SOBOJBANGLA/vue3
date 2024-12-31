<template>
    <div>
<h1 v-bind:class="ClassName">Happy new year 2025</h1>
<h1 class="head">Happy new year 2025</h1>
<img v-bind:src="abc" alt="aaa" >
<hr>
<p v-if="typewritersInStock">
  in stock
</p>

<p v-else>
  not in stock
</p>

<div v-show="showDiv">This div tag can be hidden</div>



    </div>
</template>

<script>
    export default {
        data() {
    return {
      ClassName: 'head',
      abc:require("@/assets/newYear.jpg"),
      typewritersInStock:true,
      //showDiv:true
      showDiv:false
    }
   }
    }
</script>

<style >
.head{
    font-size: 35px;
    color:red;
}

</style>