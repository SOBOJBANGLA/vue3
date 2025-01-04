<template>
    <div>
        <ul>
    <todo-item v-for="x in contents" :key="x" :todo-name="x"/>
  </ul>
  <input placeholder="Add things to do here" v-model="newContent" @keydown.enter="addContent">
  <button @click="addContent">Add</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                contents: [
                'item 1',
                'item 2',
                'item 3',
                ],
                newContent: '',
            }
        },
        methods: {
            addContent() {
      this.contents.push(this.newContent)
      this.newItem = ''
    }
        },
    }
</script>

<style>

</style>