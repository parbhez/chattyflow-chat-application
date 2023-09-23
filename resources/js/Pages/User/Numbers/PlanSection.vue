<template>
    <!-- <div>
        <label for="name">Select Plan:</label>
        <select name="plan" id="plan" v-model="formData.plan">
            <option :value="plan" v-for="(plan, key) in planList" :key="key">{{ plan }}</option>
        </select>


    </div> -->

    <div class="my-4 flex justify-center items-center gap-4">

       <div>
         <input class="hidden" id="radio_1" type="radio" name="radio"/>
         <label
           class="flex flex-col border-[2px] border-white cursor-pointer p-3 bg-cyan-400 rounded-lg text-left"
           for="radio_1"
         >
           <h4 class="font-bold text-sm mb-1">Free Trail</h4>
           <p class="text-xs">
             Join our pro features for unlimited without any
           </p>
           <h3 class="text-lg font-bold my-2">$4.99</h3>

         </label>
       </div>
       <div>
         <input class="hidden" id="radio_2" type="radio" name="radio"/>
         <label
           class="flex flex-col border-[2px] border-white cursor-pointer p-3 bg-white rounded-lg text-left shadow-sm shadow-[#e6e6e8]"
           for="radio_2"
         >
           <h4 class="font-bold text-sm mb-1">Monthly</h4>
           <p class="text-xs">
             Join our pro features for unlimited without any
           </p>
           <h3 class="text-lg font-bold my-2">$4.99</h3>

         </label>
       </div>
       <div>
         <input class="hidden" id="radio_3" type="radio" name="radio"/>
         <label
           class="flex flex-col border-[2px] border-white cursor-pointer p-3 bg-cyan-400 rounded-lg text-left"
           for="radio_3"
         >
           <h4 class="font-bold text-sm mb-1">Yearly</h4>
           <p class="text-xs">
             Join our pro features for unlimited without any
           </p>
           <h3 class="text-lg font-bold my-2">$49.99</h3>

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
    },

    data() {
        return {
            planList: ["$10.00", "$9.99"],
        };
    },
    methods: {
        // Emit the event to indicate the "Next" button is clicked
        emitNextStepEvent() {
            this.$emit("next-step-clicked");
        },
    },
};
</script>
