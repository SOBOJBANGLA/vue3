<template>
    <div class="box">
<h3>{{ productName }}</h3>
<img src="/src/favourite.jpg" width="50" alt="" v-show="isFavorite">
<p>{{ productDesc }}</p>
    </div>
</template>

<script>
    export default {
        props:[
            'productName',
            'productDesc',
            'isFavorite',
        ]
    }
</script>

<style >
.box{
    height: 150px;
    width: 100px;
    border: 1px solid green;
    float: left;
}
img{
    float: right;
}
</style>