<template>
    <div>
        <button @click="callData">Click Here</button>
<h1 v-if="mydata"><pre>{{mydata}}</pre></h1>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        data() {
            return {
                mydata:null
            }
        },

        methods: {
            async callData(){
                //alert("Hello");
                this.mydata =await axios.get("https://random-data-api.com/api/v2/users");
                //this.mydata =await response.json();
            }
        },
        
    }
</script>

<style scoped>

</style>