<template>
    <div>
        <button @click="callData">Click Here</button>
<h1 v-if="mydata"><pre>{{mydata}}</pre></h1>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                mydata:null
            }
        },

        methods: {
            async callData(){
                //alert("Hello");
                let response =await fetch('src/assets/mydata.json');
                this.mydata =await response.json();
            }
        },
        
    }
</script>

<style scoped>

</style>