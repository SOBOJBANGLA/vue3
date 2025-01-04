<template>
    <div>
       <ul>
        <li v-for="x in fruits">{{ x }}</li>

       </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                fruits: [
                    'Apple','Mango','Orange','Grape','Watermelon'
                ]
            }
        },
    }
</script>

<style >

</style>