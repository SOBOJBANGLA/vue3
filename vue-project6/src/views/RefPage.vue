<template>
    <div>
        <button @click="shoData">Click Here</button>
<h1 ref="h1content"></h1>
    </div>
    <div>
        <hr>
        <p ref="msg">Today is first Sunday of current year</p>
        <button @click="copyPaste">Click Here</button>
        <h1 ref="msgShow">....</h1>
    </div>

    <form action="">
        <input type="text" name="fullname" ref="fullname" @input="inputShow">
        
    </form>
    <h1 ref="nameShow"></h1>
</template>

<script>
    export default {
        methods: {
            shoData(){
                this.$refs.h1content.innerHTML="Hello World";
            },
            copyPaste(){
                this.$refs.msgShow.innerHTML=this.$refs.msg.innerHTML;
            },
            inputShow(){
                this.$refs.nameShow.innerHTML=this.$refs.fullname.value;
            }
        }
    }
</script>

<style >

</style>