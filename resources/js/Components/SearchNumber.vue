<script setup>
    import {
        Head
    } from '@inertiajs/vue3';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import SecondaryButton from '@/Components/SecondaryButton.vue';

</script>

<template>
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