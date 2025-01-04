<template>
    <!-- <div v-on:click="countClick"> -->
        <div v-on:mouseover="countClick">
        <h2>{{ name }}</h2>
        <p>{{ message }}</p>
        <p>{{ counter }}</p>
    </div>

    <div>
        {{foodName }}

    </div>
</template>

<script>
export default {
    data() {
        return {
            name: 'Apples',
            message: 'I like apples',
            counter: 0
        }
    },
    methods: {
        countClick(){
this.counter++
        }   
    },
    props: [
      'foodName'
    ]
};
</script>

<style></style>       