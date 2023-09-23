<template>
    <div>
      
      <div v-for="phoneNumber in phoneNumbers" :key="phoneNumber.id">
        <label
          class="relative flex p-5 cursor-pointer border my-2 border-primary bg-secondery bg-opacity-5 rounded-lg"
        >
          <input  
          v-model="formData.phone"
            type="radio"
            name="plan"
            :value="phoneNumber.phone_number"
            class="mt-1"
          />
          <span aria-hidden="true">
            <span class="pl-4 font-semibold text-green-200" >{{ phoneNumber.phone_number }}</span>
          </span>
        </label>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
        formData: {
            type: Object,
            required: true,
        },
      phoneNumbers: {
        type: Array,
        required: true,
      },
    },
  };
  </script>