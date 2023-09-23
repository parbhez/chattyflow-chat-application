<template>
    <div>
      





        <div v-for="phoneNumber in phoneNumbers" :key="phoneNumber.id">
            <label  class="relative flex p-5  cursor-pointer border my-2 border-primary bg-secondery bg-opacity-5 rounded-lg">
            <input type="radio" name="plan" value="hobby" class="mt-1" />
            <span aria-hidden="true">
              <span class="pl-4 font-semibold ">  {{ phoneNumber.phone_number }}</span>
    
            </span>
          </label>
        </div>
        




       
    </div>
  </template>
  
  <script>
  export default {
    props: {
      phoneNumbers: Array, // Define the prop to receive phone numbers
    },
  };
  </script>

  <style>

input[type="radio"]:checked + span {
  display: block;
}
</style>