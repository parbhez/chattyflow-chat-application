<template>
    <div>
      <form @submit.prevent="searchNumbers">
        <input v-model="areaCode" placeholder="Type area code" />
        <button type="submit">Search</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        areaCode: '',
      };
    },
    methods: {
      searchNumbers() {
        // Emit an event to notify the parent component to perform the search
        this.$emit('search', this.areaCode);
      },
    },
  };
  </script>