
<template>
    <div class="p-4">
      <div class="flex justify-between mb-4">


        <div class=" w-2/6">
            <input v-model="searchTerm" class="border-gray-200  border-1 w-full" placeholder="Search...">

        </div>

        <div>
         <a :href="route('contacts.create')" class="text-center px-4 py-3 bg-primary border border-transparent  font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-dark focus:bg-primary-dark active:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
>Add Contact</a>
        </div>


    
      </div>


      <div v-if="filteredData.length > 0" class="relative overflow-x-auto sm:rounded-lg border border-b-0">
        <table class="w-full text-sm text-left text-gray-500">
          <thead class="text-xs text-white uppercase bg-primary rounded-s-lg">
            <tr>
              <th v-for="column in visibleColumns" :key="column" class="px-6 py-3">
                {{ column.charAt(0).toUpperCase() + column.slice(1) }}
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(item, index) in filteredData" :key="index" class="bg-white border-b border-">
              <td v-for="column in visibleColumns" :key="column" class="px-6 py-4" v-if="column !== 'hidden'">
                {{ item[column] }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
  
      <TableColumnsModal
        :visibleColumns.sync="visibleColumns"
        :allColumns="allColumns"
        :showModal="showModal"
        @close="showModal = false"
      />
    </div>
  </template>
  
  <script >
  import { ref, computed } from 'vue';
  import TableColumnsModal from '@/components/TableColumnsModal.vue';
  import SimpleLink from '@/Components/SimpleLink.vue';

  
  export default {
    components: {
      TableColumnsModal,
    },
    setup() {
      const showModal = ref(false);
      const data = ref([
        { id: 1, name: 'Item 1', color: 'Red', category: 'Electronics', price: '$199' },
        { id: 2, name: 'Item 2', color: 'Blue', category: 'Clothing', price: '$49' },
        { id: 3, name: 'Item 3', color: 'Green', category: 'Accessories', price: '$29' },
        { id: 4, name: 'Item 4', color: 'Yellow', category: 'Electronics', price: '$149' },
        { id: 5, name: 'Item 5', color: 'Black', category: 'Accessories', price: '$9' },
      ]);
      const allColumns = ref(Object.keys(data.value[0] || {}));
      const visibleColumns = ref([...allColumns.value]);
      const searchTerm = ref('');
  
      const filteredData = computed(() => {
        if (!searchTerm.value.trim()) return data.value;
  
        const search = searchTerm.value.toLowerCase();
        return data.value.filter(item =>
          visibleColumns.value.some(column => {
            return item[column]?.toString().toLowerCase().includes(search);
          })
        );
      });
  
      return {
        showModal,
        data,
        allColumns,
        visibleColumns,
        searchTerm,
        filteredData,
      };
    },
  };
  </script>