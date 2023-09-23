<script setup>
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import TextInput from '@/Components/TextInput.vue';

</script>



<template>
    <div>


        <div class="flex space-x-8 mb-4 bg-primary">
            <div v-for="index in totalSteps" :key="index"
                :class="{ 'text-white bg-primary-light py-2 text-center px-4': index === step, 'text-gray-100 py-2 text-center px-4': index !== step }">
                {{ stepNames[index - 1] }}
            </div>
        </div>

        <!-- Step 1 form fields -->
        <div v-if="step === 1">

            <div class="max-w-7xl ">
                
                <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput id="password" type="password" class="mt-1 block w-full" autocomplete="current-password" />

                <InputError class="mt-2" />
                </div>
            </div>

            


            <input v-model="stepOneData.name" type="text" placeholder="Name">
        </div>

        <!-- Step 2 form fields -->
        <div v-if="step === 2">
            <input v-model="stepTwoData.image" type="text" placeholder="Image URL">
        </div>

        <!-- Step 3 form fields -->
        <div v-if="step === 3">
            <input v-model="stepThreeData.expenses" type="number" placeholder="Expenses">
            <input v-model="stepThreeData.payout" type="number" placeholder="Payout">
            <input v-model="stepThreeData.country" type="text" placeholder="Country">
        </div>

        <!-- Step 4 form fields -->
        <div v-if="step === 4">
            <!-- Additional form fields for Step 4 -->
        </div>

        <button @click="prevStep" :disabled="step === 1">Previous</button>
        <button @click="nextStep" :disabled="step === totalSteps">{{ step === totalSteps ? 'Submit' : 'Next' }}</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                step: 1,
                totalSteps: 4,
                stepOneData: {
                    name: ''
                },
                stepTwoData: {
                    image: ''
                },
                stepThreeData: {
                    expenses: '',
                    payout: '',
                    country: ''
                },
                stepNames: ['General Information', 'Tracking & Controll', 'Revenue & Payout', 'Additional Information'],
            };
        },
        methods: {
            nextStep() {
                if (this.step === this.totalSteps) {
                    this.$inertia.post('/multi-step-form', {
                        name: this.stepOneData.name,
                        image: this.stepTwoData.image,
                        expenses: this.stepThreeData.expenses,
                        payout: this.stepThreeData.payout,
                        country: this.stepThreeData.country,
                    });
                } else {
                    this.step += 1;
                }
            },
            prevStep() {
                this.step -= 1;
            },
        },
    };

</script>
