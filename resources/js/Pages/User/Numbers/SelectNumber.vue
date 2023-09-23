<template>
    <div class="h-72 overflow-auto mb-5">



        <div  v-for="(number, key) in numberList">

            <div value="number" >
                <label  class="relative flex p-5  cursor-pointer border my-2 border-primary bg-secondery bg-opacity-5 rounded-lg">
                <input type="radio" name="plan" class="mt-1" :value="number" v-model="formData.phone_number"/>
                <span aria-hidden="true">
                    <span class="pl-4 font-semibold "> {{number}}</span>
        
                </span>
                </label>
            </div>
         
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
        numberList: {
            type: Array,
            required: true
      }
    },
    methods: {
        // Emit the event to indicate the "Next" button is clicked
        emitNextStepEvent() {
            this.$emit("next-step-clicked");
        },
    },
};
</script>