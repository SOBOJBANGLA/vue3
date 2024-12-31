<template>
    <div>
        <ul>
            <li v-for="(i, index) in fruits" :key="index">{{ i }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                fruits: [
                    "Mango",
                    "Orange",
                    "Apple",
                    "Grapes"
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
