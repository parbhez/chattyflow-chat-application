<template>
  <div v-if="showModal" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50">
    <div class="bg-white p-6 rounded-lg shadow-lg">
      <h2 class="text-lg font-semibold mb-4">Customize Columns</h2>
      <div v-for="column in allColumns" :key="column" class="flex items-center mb-2">
        <label class="mr-2">{{ column }}</label>
        <input type="checkbox" v-model="selectedColumns" :value="column" class="mr-2">
      </div>
      <button @click="applyChanges" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg">Apply Changes</button>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';

export default {
  props: {
    visibleColumns: Array,
    allColumns: Array,
    showModal: Boolean,
  },
  setup(props, { emit }) {
    const selectedColumns = ref([...props.visibleColumns]);

    const applyChanges = () => {
      emit('update:visibleColumns', selectedColumns.value);
      emit('close');
    };

    return {
      selectedColumns,
      applyChanges,
    };
  },
};
</script>