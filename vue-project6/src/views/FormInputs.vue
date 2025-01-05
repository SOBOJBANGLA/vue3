<template>
    <div>
        <h1>Registration Form</h1>
        <div ref="infoShow" id="display">.....</div>
        <hr>

        <div>{{ fullname }}</div>
        <div>{{ gender }}</div>
        <div>{{ district }}</div>
        <div>{{ languages }}</div>
        <div>{{ address }}</div>
<form @submit.prevent="FormSubmit">
Name:<input type="text" v-model="fullname" name="fullname"><br>
Gender: 
Male:<input type="radio" name="gender" v-model="gender" value="male">
Female:<input type="radio" name="gender" v-model="gender" value="female"> <br>
District: <br>
<select name="district" v-model="district" >
<option disabled selected>Select One</option>
<option>Dhaka</option>
<option>Sylhet</option>
<option>Khulna</option>
<option>Rangpur</option>
</select> <br>

Interested Languages: <br>
<input type="checkbox" name="PHP" v-model="languages"  value="PHP">PHP
<input type="checkbox" name="JavaScript" v-model="languages" value="JavaScript">JavaScript
<input type="checkbox" name="VUE" v-model="languages" value="VUE">VUE

<br>
Address: <br>
<textarea name="address" id="" v-model="address"></textarea><br>

<input type="submit" name="submit" value="SUBMIT">

</form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                fullname: '',
                gender:'',
                district:'',
                languages:[],
                address: '',
                info:''
            }
        },

        methods: {
            FormSubmit(){
                this.info +="Full Name: "+this.fullname +"<br/>";
                this.info +="Gender: "+this.gender+"<br/>";
                this.info +="District: "+this.district+"<br/>";
                this.info +="Languages: "+this.languages+"<br/>";
                this.info +="Address: "+this.address+"<br/>";
                this.$refs.infoShow.innerHTML=this.info+"<br/>";
            }
        },
    }
</script>

<style scoped>
#display{
    background-color: blanchedalmond;
}

</style>