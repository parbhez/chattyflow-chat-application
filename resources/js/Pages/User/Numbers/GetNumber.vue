
<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import {
        Head
    } from '@inertiajs/vue3';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import SecondaryButton from '@/Components/SecondaryButton.vue';



</script>
<style>
#bkashRadio:checked ~ #bkashDiv,
    #bankRadio:checked ~ #bankDiv,
    #btcRadio:checked ~ #btcDiv {
        display: block;
    }
</style>
<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="w-full min-h-screen grid place-items-center ">
            <div class="w-2/6 bg-white rounded-lg px-16 py-16 text-center">
              <div>
                <img src="images/app/logo.png" alt="" class="mx-auto" />
              </div>
                <div class="text-center mb-5">
                    <h5 class="font-medium text-lg text-gray-500">Select your phone number</h5>
                   
                </div>
                <form @submit.prevent="submitForm">
                    <component
                        :is="currentStepComponent"
                        v-on:form-next-step="nextStep"
                        :form-data="formData"
                        :number-list="numberList"
                    />
                  
                        <SecondaryButton v-if="currentStep > 0" @click.prevent="prevStep" class="mt-5 w-1/2 ">
                            Back
                        </SecondaryButton>
                        <PrimaryButton v-if="showNextButton" @click.prevent="nextStep" class="mt-5 w-1/2">
                            Continue
                        </PrimaryButton>
                        <PrimaryButton v-else type="submit" class="mt-5 w-1/2">Submit</PrimaryButton>
                   
                </form>

            </div>
        </div>
    </AuthenticatedLayout>
</template>






       



<script>
import SearchNumber from "./SearchNumber.vue";
import SelectNumber from "./SelectNumber.vue";
import PlanSection from "./PlanSection.vue";
import PaymentInformation from "./PaymentInformation.vue";

export default {
    components: {
        SearchNumber,
        SelectNumber,
        PlanSection,
        PaymentInformation,
    },
    data() {
        return {
            currentStep: 0,
            steps: ["SearchNumber", "SelectNumber", "PlanSection", "PaymentInformation"],
            preload: false,
            timer: '',
            numberList: [],
            formData: {
                area_code: "",
                plan: "",
                phone_number: "",
                name: "",
                email: "",
                address: "",
                customer_phone: "",
            },
        };
    },
    computed: {
        currentStepComponent() {
            return this.steps[this.currentStep];
        },
        showNextButton() {
            // Show "Next" button only on Step1 and Step2, not on Step3
            return this.currentStep < this.steps.length - 1;
        },
    },

    watch: {
        "formData.area_code"(newValue) {
            // Clear the previous timer if it exists
            clearTimeout(this.timer);
            // Set a new timer to call fetchNumber after 1000ms (1 second)
            this.timer = setTimeout(() => {
                this.fetchNumber(newValue);
            }, 500);
        },
    },

    methods: {
        async fetchNumber(area_code) {
            this.preload = true;
            try {
                const response = await axios.get(
                    `fetch-number?area_code=${area_code}`
                );
                //return console.log(response.data);  // Log the data to the console
                this.numberList = response.data.data;
                this.preload = false;
                //console.log(this.numberList); // Log the data to the console
            } catch (error) {
                this.preload = false;
                //console.error("Error fetching numbers:", error);
            } finally {
                this.preload = false;
            }
        },

        nextStep() {
            if (this.currentStep < this.steps.length - 1) {
                this.currentStep++;
            } else {
                this.submitForm();
            }
        },
        prevStep() {
            if (this.currentStep > 0) {
                this.currentStep--;
            }
        },

        async submitForm() {
            await axios
                .post("/multi-step-submit-form", this.formData)
                .then((response) => {
                    console.log(response.data);
                    // Reset form data after successful submission
                    this.formData = {
                        area_code: "",
                        plan: "",
                        phone_number: "",
                        name: "",
                        email: "",
                        address: "",
                        customer_phone: "",
                    };
                    this.currentStep = 0; // Reset step to the first step
                })
                .catch((error) => {
                    console.error("Error submitting form:", error);
                });
        },
    },
};
</script>