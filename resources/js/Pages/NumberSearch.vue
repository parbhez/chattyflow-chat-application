<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import {
        Head
    } from '@inertiajs/vue3';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import SecondaryButton from '@/Components/SecondaryButton.vue';

</script>

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
                <form @submit.prevent="searchNumbers">
                    <div class=" flex flex-col md:flex-row justify-center gap-6 my-8 ">
                        <input v-model="areaCode" type="text" id="areaCode"
                            class="text-gray-600 border-[1px] border-gray-400 px-5 py-4 rounded-lg text-xs flex items-center justify-center gap-2 w-full"
                            name="areaCode" placeholder="Enter area code" required>
                        
                        
                        <SecondaryButton type="submit" class=" w-full">
                            Get Number
                        </SecondaryButton>

                    </div>
                </form>

                <div class=" h-72 overflow-auto mb-5">
                  <PhoneNumberList :phoneNumbers="phoneNumbers"></PhoneNumberList>
                </div>

                <PrimaryButton class=" w-full">
                    Continue
                </PrimaryButton>
            </div>
        </div>
    </AuthenticatedLayout>
</template>




<script>
    import PhoneNumberList from '@/Components/PhoneNumberList.vue';
    import axios from 'axios'; 

    export default {
        components: {
            PhoneNumberList,
        },
        data() {
            return {
                areaCode: '',
                phoneNumbers: [],
            };
        },
        created() {
           
            this.loadPhoneNumbers();
        },
        methods: {
            async loadPhoneNumbers() {
                try {
                 
                    const response = await axios.get(
                    '/api/initial-phone-numbers'); 
                    this.phoneNumbers = response.data; 
                } catch (error) {
                    console.error('Error:', error);
                }
            },
            async searchNumbers() {
                try {
                   
                    const response = await axios.get('/api/search-phone-numbers', {
                        params: {
                            areaCode: this.areaCode
                        },
                    });

                    this.phoneNumbers = response.data; 
                } catch (error) {
                    console.error('Error:', error);
                }
            },
        },
    };

</script>
