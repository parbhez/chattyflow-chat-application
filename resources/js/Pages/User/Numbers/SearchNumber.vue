


























<template>
  <div>
    <input type="text" v-model="formData.area_code"
          class="text-gray-600 border-[1px] border-gray-400 px-5 py-4 rounded-lg text-xs mt-5 w-1/2 gap-2" placeholder="Type area code"
        />
   
  </div>
</template>

<script>
export default {
  props: {
    formData: {
      type: Object,
      required: true
    }
  },
  methods: {
    // Emit the event to indicate the "Next" button is clicked
    emitNextStepEvent() {
      this.$emit('next-step-clicked');
    }
  }
};
</script>
