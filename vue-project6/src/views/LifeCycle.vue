<template>
    <h2>Component</h2>
    <p>This is the component</p>
    <p id="pResult">{{ text }}</p>
</template>

<script>
export default {
	data() {
		return {
			text: '...'
		}
	},
  beforeCreate() {
		this.text = 'initial text'; // This line has no effect
    console.log("beforeCreate: The component is not created yet.");
  },
  created() {
		this.text = 'After Created current object';
    console.log("created: The component just got created.");
  }
}
</script>